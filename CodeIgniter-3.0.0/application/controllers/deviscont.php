<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DEVISCONT extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }
 function listedeDevis()
   {
	    $this->load->model('devis');

    $data['results'] = $this->devis->listeDevis(); 

   
    $this->load->view('devisliste', $data);
  
	
	    $this->load->model('devis');
	    $data['devisliste'] = $this->devis->listeDevis();
    $this->load->view('devisliste', $data);
	  /* $this->load->model('devis');
	   $tab= $this->devis->listeDevis();
	   echo $tab;*/
	   
   }

 function ajoutDevis()
 {
	
	 
	  $this->load->view('ajoutdevis');
	 
        $date_envoie=$this->input->post('date_envoie');
        $date_validation=$this->input->post('date_validation');
		
            $this->load->model('devis');
    
         $this->devis->ajouterDevis($date_envoie,$date_validation);

 }
  function modifierDeviscont()
  {
	     $this->load->view('modifierdevis');
		 
		 $id_devis=$this->input->post('id_devis');
	    $date_envoie=$this->input->post('date_envoie');
        $date_validation=$this->input->post('date_validation');
		
		

          $this->load->model('devis');
    
         $this->devis->modifierDevis($id_devis,$date_envoie,$date_validation);
	  
  }
   function supprimerDevis()
   {
	    $this->load->view('supprimerdevis');
		
		$id_devis=$this->input->post('id_devis');
		 $this->load->model('devis');
	 $this->devis->supprimerDevis($id_devis);

   }
   
   

}

?>