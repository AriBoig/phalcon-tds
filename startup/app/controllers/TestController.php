<?php
/**
 * Created by PhpStorm.
 * User: arist
 * Date: 01/03/2017
 * Time: 16:01
 */

class TestController extends ControllerBase{
    protected $semantic;

    public function initialize(){
        $this->semantic=$this->jquery->semantic();
    }

    public function indexAction(){

    }

    public function hideShowAction(){
        $ck=$this->semantic->htmlCheckbox("ckShowHide","Afficher/masquer");
        $message=$this->semantic->htmlMessage("zone");
        $ck->on("change",$message->jsToggle("$(this).prop('checked')"));
        $ck->setChecked(true);
        echo $ck;
        $this->jquery->compile($this->view);
    }

    public function changeCssAction(){
        $bt=$this->semantic->htmlButton("btPage1","page 1");
        $bt->getOnClick("test/page1","#pageContent");
        $bt2=$this->semantic->htmlButton("btPage2","page 2");
        $bt2->getOnClick("test/page2","#pageContent");
        $this->semantic->htmlMessage("pageContent");
        $this->jquery->compile($this->view);
    }

    public function page1Action(){
        echo "Page 1.......";
    }

    public function page2Action(){
        echo ".......Page 2";
    }

}