<?php
//分页类
//共有 2 条记录,每页显示 2 条记录， 当前为 1/1 [首页] [上一页] [下一页] 末页
class Page{
	private $total; //总共的记录数
	private $pagesize; //每页显示的条数
	private $current; //当前页
	private $pagenum; //总的页数
	private $first;   //首页超链接
	private $last;    //尾页超链接
	private $prev;    //上一页超链接
	private $next;    //下一页超链接
	private $url;     //url

	/**
	 *@access public
	 *@param $total int 总共的记录数
	 *@param $pagesize int 每页显示的条数
	 *@param $current int  当前页
	 *@param $script sting 页面路径
	 *@param $params array 参数
	 *@return void
	 */
	public function __construct($total,$pagesize,$current,$script = "",$params = array()){
		$this->total = $total;
		$this->pagesize = $pagesize;
		$this->current = $current;
		$this->pagenum = ceil( $this->total / $this->pagesize );
		//拼凑url
		//$script = "index.php"
		//$params = array("p" => "admin","c" => "brand", "a"=>"index",);
		//目标 index.php?p=admin&c=brand&a=index&page=
		$p = array();
		foreach($params as $k => $v){
			$p[] = "$k=$v";
		}
		$this->url = $script . "?" . implode("&", $p) . '&page=';
		$this->first = $this->getFirst();
		$this->last = $this->getLast();
		$this->prev = $this->getPrev();
		$this->next = $this->getNext();		
	}

	private function getFirst(){
		if ($this->current == 1 ){
			return "[首页]";
		} else {
			return "<a href='{$this->url}1'>[首页]</a>";
		}
	}

	private function getLast(){
		if ($this->current == $this->pagenum  ){
			return "[尾页]";
		} else {
			return "<a href='{$this->url}{$this->pagenum}'>[尾页]</a>";
		}
	}

	private function getPrev(){
		if ($this->current == 1 ){
			return "[上一页]";
		} else {
			return "<a href='{$this->url}" .($this->current - 1). "'>[上一页]</a>";
		}
	}
	private function getNext(){
		if ($this->current == $this->pagenum ){
			return "[下一页]";
		} else {
			return "<a href='{$this->url}" .($this->current + 1). "'>[下一页]</a>";
		}
	}

	public function showPage(){
		return "共有 {$this->total} 条记录,每页显示 {$this->pagesize} 条记录， 当前为 {$this->current}/{$this->pagenum}
		       {$this->first} {$this->prev} {$this->next} {$this->last}";
	}
}