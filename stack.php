<?php
class CreateStack {
    public $top;
    public $stack = array();

    public function isEmpty() {
        if($this->top == -1) {
            echo "Stack rong. \n";
        } else {
            echo "Stack khong rong. \n";
        }
    }

    public function size() {
        return $this->top+1;
    }

    public function push($x) {
        $this->stack[++$this->top] = $x;
        echo $x." da duoc them. \n";
    }

    public function pop() {
        if($this->top < 0){
            echo "Stack rong. \n";
        } else {
            $x = $this->stack[$this->top--];
            echo $x." bi xoa. \n";
        }
    }

    public function topElement() {
        if($this->top < 0) {
            echo "Stack rong. \n";
        } else {
            return $this->stack[$this->top];
        }
    }
}

// test the code
$MyStack = new CreateStack();
$MyStack->push(10);
$MyStack->push(20);
$MyStack->push(30);
$MyStack->push(40);

$MyStack->pop();
$MyStack->isEmpty();
?>