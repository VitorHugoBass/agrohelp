<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Medicos extends CI_Controller {

    /**
     * @author Vitor Hugo Bassetto <vitorhugobassetto@gmail.com>
     * 
     */
    public function index() {
        $this->load->model('medico_model', 'medico');
        $data['lista'] = $this->medico->listarTodosMedicos();
        $this->layout->view('medico/listar_view', $data);
    }

    public function adicionar() {
        $this->load->model('medico_model', 'medico');
        $this->load->model('especialidade_model', 'esp');

        $post = $this->input->post();
        $data = array();

        if ($post) {
            $salvar = $this->medico->salvar($post);
            redirect('/medico/' . $salvar);
        }
        $especialidade = $this->esp->getAllEspecialidade();
        $this->data['especialidades'] = $especialidade;

        $this->layout->view('medico/adicionar_view');
    }

    public function editar($id_pessoa) {

        $this->load->model('medico_model', 'medico');
        $post = $this->input->post();

        //pega o campo especialidades
        $this->load->model('especialidade_model', 'esp');
        $especialidade = $this->esp->getAllEspecialidade();
        $this->data['especialidades'] = $especialidade;

        if ($post) {
            $salvar = $this->medico->salvar($post);
        }

        $dadosMedico = $this->medico->listarMedico($id_pessoa);

        if (!empty($dadosMedico)) {
            $dadosMedico['nr_salario'] = str_replace('.', ',', $dadosMedico['nr_salario']);
            $data['populateForm'] = $dadosMedico;
        }

        //end if

        $this->layout->view('medico/adicionar_view', $data);
    }

    public function excluir($id_pessoa) {
        if ($id == "") :
            redirect(site_url() . '/medico/list');
        else :
            $this->load->model('medico_model', 'medico');

            $alterarOrdem = $this->medico->excluir($id_pessoa);

            redirect('/medico/list');
        endif;
    }


}

/* End of file welcome.php */
    /* Location: ./application/controllers/welcome.php */
    