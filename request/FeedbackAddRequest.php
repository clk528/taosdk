<?php
/**
 * TOP API: taobao.feedback.add request
 * 
 * @author auto create
 * @since 1.0, 2014-03-04 00:00:00
 */
class FeedbackAddRequest
{
	/** 
	 * 具体反馈的信息，一个json构成的字符串
	 **/
	private $info;
	
	/** 
	 * 反馈信息的类型，一般根据业务逻辑划分
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setInfo($info)
	{
		$this->info = $info;
		$this->apiParas["info"] = $info;
	}

	public function getInfo()
	{
		return $this->info;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.feedback.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->info,"info");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}