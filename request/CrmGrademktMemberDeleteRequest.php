<?php
/**
 * TOP API: taobao.crm.grademkt.member.delete request
 * 
 * @author auto create
 * @since 1.0, 2012-12-05 00:00:00
 */
class CrmGrademktMemberDeleteRequest
{
	/** 
	 * 会员nick
	 **/
	private $buyerNick;
	
	/** 
	 * 系统属性，json格式
	 **/
	private $feather;
	
	/** 
	 * 会员属性-json format
生成方法见http://open.taobao.com/doc/detail.htm?id=101281
	 **/
	private $parameter;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setFeather($feather)
	{
		$this->feather = $feather;
		$this->apiParas["feather"] = $feather;
	}

	public function getFeather()
	{
		return $this->feather;
	}

	public function setParameter($parameter)
	{
		$this->parameter = $parameter;
		$this->apiParas["parameter"] = $parameter;
	}

	public function getParameter()
	{
		return $this->parameter;
	}

	public function getApiMethodName()
	{
		return "taobao.crm.grademkt.member.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkNotNull($this->feather,"feather");
		RequestCheckUtil::checkNotNull($this->parameter,"parameter");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
