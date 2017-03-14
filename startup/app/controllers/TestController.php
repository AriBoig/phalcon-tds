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

        $bt->getOn("mouseover","test/page1","#pageDesc");
        $bt2->getOn("mouseover","test/page2","#pageDesc");

        $bt->on("mouseout",$this->jquery->html("#pageDesc",""));
        $bt2->on("mouseout",$this->jquery->html("#pageDesc",""));

        $this->jquery->compile($this->view);
    }

    public function page1Action(){
        $this->view->disable();
        echo "Page 1";
        echo "<div id='page2'> </div>";
        $this->jquery->get("test/page2","#page2");
        echo $this->jquery->compile();
    }

    public function page2Action(){
        $this->view->disable();
        echo "Page 2";
    }

    public function chargementAction(){
        $bt=$this->semantic->htmlButton("btLoad","Chargement");
        $bt->getOnClick("test/page1","#page1");
        $this->jquery->compile($this->view);
    }


}