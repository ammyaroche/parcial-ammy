<?php 

    namespace App\Controllers;
    use CodeIgniter\Controller;
use App\Models\autores_libros;

    class ControladorAutoli extends BaseController{
        public function verAutoli(){
            $libro_id = new autores_libros();
            $datosbd['autolibd']=$libro_id->findAll();
            return view('Autolis',$datosbd);
        }
        //agregaar
        public function agregarLibro() {
            $libro_id = new autores_libros();  
            $libro=$this->request->getPost('txt_libro');
           $autor =$this->request->getPost('txt_autor');

           //
           
           $datosbd=['libro_id'=>$libro,
           'autor_id'=>$autor
        ];
        $libro_id->insert($datosbd);

        $datosbd['autolibd']=$libro_id->findAll();
        return view('Autolis',$datosbd);
        }
      //eliminar  
        public function eliminarLibro($libro=null){
            $libro_id = new autores_libros();
            $libro_id->delete($libro);

            $datosbd['autolibd']=$libro_id->findAll();
            return view('Autolis',$datosbd);
        }
        //ver datos
        public function verDatosLibro($libro=null){
            $libro_id = new autores_libros();
            $datosbd['autolibd']=$libro_id->where('libro_id',$libro)->first();
            return view('frm_actualizar_libro',$datosbd);
 }
 //actualizar
        public function actualizarLibro(){
            $libro_id = new autores_libros();
            $libro=$this->request->getPost('txt_libro');
           $autor =$this->request->getPost('txt_autor'); 

           $datosbd=[
           'autor_id'=>$autor
        ];
        $libro_id->update ($libro, $datosbd);

        $datosbd['autolibd']=$libro_id->findAll();
        return view('Autolis',$datosbd);
        }
        }
    

?>