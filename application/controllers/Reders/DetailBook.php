<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailBook extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->helper('url');
		$this->load->model('Reders/DetailModel');
	}

	public function index($id){

        if (!empty($id)){

            $detail_info = $this->DetailModel->where_book($id);

            if ($detail_info){

                $data['detail_info'] = $detail_info;            

                $this->load->view('detailBook_view', $data);
            }
            else {
                echo "찾지못함";
            }
        }

		
	}

    public function update($id) {

        $before_data = $this->DetailModel->where_book($id);

        if ($this->input->post()) {

            $title = $this->input->post('title');
            $content = $this->input->post('content');
    
            /// 이후 업데이트 로직을 수행합니다.
             $this->DetailModel->update_book($id, $title, $content);
    
            // 수정 성공 메시지 출력 및 리다이렉트
            echo "<script>
                    alert('수정이 성공적으로 완료되었습니다.');
                    window.location = '/Reders';
                </script>";
        }else{
            // 수정 폼을 보여줄 때 레코드 정보를 전달
            $data['before_data'] = $before_data;
            $this->load->view("updateBook_view", $data);
        }
    
    }

    public function delete($id) {

        $del_before_data = $this->DetailModel->get_book($id);

       if ($del_before_data){

            $this->DetailModel->delete_book($id);


            echo "<script>
                    alert('삭제 되었습니다.');
                    window.location = '/Reders';
                </script>";

       } else {

        echo "글을 찾을 수 없습니다";

            
        }
    
    }


}
