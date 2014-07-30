<?php
/**
 * TOP API: taobao.tongcheng.api.getsellerevoucher request
 * 
 * @author auto create
 * @since 1.0, 2013-06-04 00:00:00
 */
class TongchengApiGetsellerevoucherRequest
{
	/** 
	 * 商家发布的代金券id
	 **/
	private $id;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getApiMethodName()
	{
		return "taobao.tongcheng.api.getsellerevoucher";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
