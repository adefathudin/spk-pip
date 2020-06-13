<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Siswa extends MY_Controller {

    function __construct(){
        parent::__construct();        
        $this->load->model('r_data_siswa_m');
        $this->load->model('r_data_result_m');
    }

    public function index()
    {        
        $this->data['title'] = 'Halaman Siswa';
        $this->data['subview'] = 'siswa/index';
        $this->data['data_siswa'] = $this->r_data_siswa_m->get();
        $this->load->view('_layout_main', $this->data);
    }
    
    public function get_detail_siswa()
    {        
        $nisn = $this->input->get('nisn');
        
        $output['status']= TRUE;
        $output['detail_siswa'] = $this->r_data_siswa_m->get_by(['nisn' => $nisn]);
        
        echo json_encode($output);
    }
    
    public function upload_post(){ 
        
        $this->db->empty_table('r_data_siswa');
        $this->db->empty_table('r_data_result');
        
        ini_set('memory_limit', '-1');        
        $output = ['status' => FALSE, 'message'=>''];        

        $config['upload_path'] = sys_get_temp_dir();
        $config['allowed_types'] = 'xls|xlsx';
        $config['max_size'] = 5000;
        
        $this->load->library('upload', $config);        
        if(!$this->upload->do_upload('cms')){
            $output['message'] = $this->upload->display_errors();
            print_r($output);
            return false;
        }
            
        // Get information of file uploaded
        $data = $this->upload->data();
            
        //get file_type
        $path_parts = pathinfo($data['full_path']);
        $file_extension = $path_parts['extension'];
        
        try {
            /**  Create a new Reader of the type defined in $inputFileType  **/
            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader(ucfirst($file_extension));
            /**  Advise the Reader that we only want to load cell data  **/
            $reader->setReadDataOnly(true);
            /**  Load $inputFileName to a Spreadsheet Object  **/
            $spreadsheet = $reader->load($data['full_path']);
            //Get active spreadsheet
            $sheet = $spreadsheet->getActiveSheet();
            $row_start = 7;
            $row_max = $sheet->getHighestRow();

            $output['summaries'] = ['total_data'=>0, 'success'=>0, 'failed'=>0, 'items'=>[]];

            if ($row_max <= 0) {
                $output['message'] = 'Tidak ada data untuk diproses';
                return $this->response($output);
            }

            $this->db->trans_begin();
            for($i=$row_start; $i<=$row_max; $i++){
							
                $nisn = trim($sheet->getCell('E' . $i)->getValue());
                $nama_siswa = trim($sheet->getCell('B' . $i)->getValue());	
                $jk = trim($sheet->getCell('D' . $i)->getValue());	
                $tempat_lahir = trim($sheet->getCell('F' . $i)->getValue());	
                $tanggal_lahir = trim($sheet->getCell('G' . $i)->getValue());	
                $nik = trim($sheet->getCell('H' . $i)->getValue());	
                $agama = trim($sheet->getCell('I' . $i)->getValue());	                
                $alamat = trim($sheet->getCell('J' . $i)->getValue());	
                $penerima_kps = trim($sheet->getCell('W' . $i)->getValue());	
                $no_kps = trim($sheet->getCell('X' . $i)->getValue());		
                $nama_ayah = trim($sheet->getCell('Y' . $i)->getValue());		
                $pekerjaan_ayah = trim($sheet->getCell('AB' . $i)->getValue());	
                $nama_ibu = trim($sheet->getCell('AE' . $i)->getValue());                		
                $penghasilan_orang_tua = trim($sheet->getCell('AC' . $i)->getValue());	
                $rombel_saat_ini = trim($sheet->getCell('AQ' . $i)->getValue());		
                $penerima_kip = trim($sheet->getCell('AT' . $i)->getValue());		
                $nomor_kip = trim($sheet->getCell('AU' . $i)->getValue());		
                $jumlah_saudara_kandung = trim($sheet->getCell('BM' . $i)->getValue());	

                $data = array(
                    'nisn' => $nisn, 'nama_siswa' => $nama_siswa, 'jk' => $jk, 'tempat_lahir' => $tempat_lahir, 'tanggal_lahir' => $tanggal_lahir,
                    'nik' => $nik, 'agama' => $agama, 'alamat' => $alamat, 'penerima_kps' => $penerima_kps, 'no_kps' => $no_kps,
                    'nama_ayah' => $nama_ayah, 'pekerjaan_ayah' => $pekerjaan_ayah, 'nama_ibu' => $nama_ibu, 'penghasilan_orang_tua' => $penghasilan_orang_tua, 'rombel_saat_ini' => $rombel_saat_ini, 'penerima_kip' => $penerima_kip, 'nomor_kip' => $nomor_kip, 'jumlah_saudara_kandung' => $jumlah_saudara_kandung
                );

                if ($this->r_data_siswa_m->save($data)) {
                    if ($sheet->getCell('E' . $i)->getValue() != null){
                    $this->r_data_result_m->save(['nisn' => trim($sheet->getCell('E' . $i)->getValue())]);}
                } else {
                    
                }
            }
            $this->db->trans_commit();

            $output['status']= TRUE;

        } catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $ex) {
            $output['message'] = $ex->getMessage();

            return $this->response($output);
        }

		echo ("<script>window.alert('Upload Data Berhasil');window.history.back();</script>");
        
    }

}
