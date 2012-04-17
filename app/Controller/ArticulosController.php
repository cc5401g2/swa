<?php
class ArticulosController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('articulos', $this->Articulo->find('all'));
    }
	
	public function viewall() {
        $this->set('articulos', $this->Articulo->find('all'));
    }
	
	public function view($id = null) {
        $this->Articulo->id = $id;
        $this->set('articulo', $this->Articulo->read());
    }
	public function add() {
        if ($this->request->is('post')) {
            if ($this->Articulo->save($this->request->data)) {
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your post.');
            }
        }
    }
	public function edit($id = null) {
    $this->Articulo->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Articulo->read();
    } else {
        if ($this->Articulo->save($this->request->data)) {
            $this->Session->setFlash('Your post has been updated.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Unable to update your post.');
        }
    }
	}
	
	public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Articulo->delete($id)) {
        $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
        $this->redirect(array('action' => 'index'));
    }
	}
}
?>