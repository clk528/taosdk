<?php
/**
 * TOP API: taobao.trade.acquire.refund.query request
 * 
 * @author auto create
 * @since 1.0, 2014-02-28 00:00:00
 */
class TradeAcquireRefundQueryRequest
{
	/** 
	 * 支付宝订单号，最短16位，最长64位。
商家外部订单号与支付宝订单号（交易号）这2个入口参数必须二选一提供一个参数，二者同时存在，外部订单号为准
	 **/
	private $alipayOrderId;
	
	/** 
	 * 商家操作员id（不超过64个字符），退款和下单时的操作人员可以不一样
	 **/
	private $operatorId;
	
	/** 
	 * 商家外部订单号（不超过64个字符），退款时，请确保该外部订单已经存在系统中，否则会报错
	 **/
	private $outId;
	
	/** 
	 * 商家退款请求号（也即外部退款流水号，不超过64个字符）；请保证唯一，不同的请求使用不同的退款流水号
	 **/
	private $outRefundReqNo;
	
	private $apiParas = array();
	
	public function setAlipayOrderId($alipayOrderId)
	{
		$this->alipayOrderId = $alipayOrderId;
		$this->apiParas["alipay_order_id"] = $alipayOrderId;
	}

	public function getAlipayOrderId()
	{
		return $this->alipayOrderId;
	}

	public function setOperatorId($operatorId)
	{
		$this->operatorId = $operatorId;
		$this->apiParas["operator_id"] = $operatorId;
	}

	public function getOperatorId()
	{
		return $this->operatorId;
	}

	public function setOutId($outId)
	{
		$this->outId = $outId;
		$this->apiParas["out_id"] = $outId;
	}

	public function getOutId()
	{
		return $this->outId;
	}

	public function setOutRefundReqNo($outRefundReqNo)
	{
		$this->outRefundReqNo = $outRefundReqNo;
		$this->apiParas["out_refund_req_no"] = $outRefundReqNo;
	}

	public function getOutRefundReqNo()
	{
		return $this->outRefundReqNo;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.acquire.refund.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->alipayOrderId,64,"alipayOrderId");
		RequestCheckUtil::checkNotNull($this->operatorId,"operatorId");
		RequestCheckUtil::checkMaxLength($this->operatorId,64,"operatorId");
		RequestCheckUtil::checkMaxLength($this->outId,64,"outId");
		RequestCheckUtil::checkNotNull($this->outRefundReqNo,"outRefundReqNo");
		RequestCheckUtil::checkMaxLength($this->outRefundReqNo,64,"outRefundReqNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
