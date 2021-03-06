<?php
/**
 * TOP API: taobao.xhotel.order.search request
 * 
 * @author auto create
 * @since 1.0, 2014-04-11 00:00:00
 */
class XhotelOrderSearchRequest
{
	/** 
	 * 订单创建时间查询结束时间，格式为：yyyy-MM-dd。不能早于created_start，间隔不能大于30
	 **/
	private $createdEnd;
	
	/** 
	 * 订单创建时间查询起始时间，格式为：yyyy-MM-dd
	 **/
	private $createdStart;
	
	/** 
	 * 酒店订单oids列表，多个oid用英文逗号隔开，一次不超过20个。
	 **/
	private $orderIds;
	
	/** 
	 * 酒店订单tids列表，多个tid用英文逗号隔开，一次不超过20个。oids和tids都传的情况下默认使用tids
	 **/
	private $orderTids;
	
	/** 
	 * 分页页码。取值范围，大于零的整数，默认值1，即返回第一页的数据。页面大小为20
	 **/
	private $pageNo;
	
	private $apiParas = array();
	
	public function setCreatedEnd($createdEnd)
	{
		$this->createdEnd = $createdEnd;
		$this->apiParas["created_end"] = $createdEnd;
	}

	public function getCreatedEnd()
	{
		return $this->createdEnd;
	}

	public function setCreatedStart($createdStart)
	{
		$this->createdStart = $createdStart;
		$this->apiParas["created_start"] = $createdStart;
	}

	public function getCreatedStart()
	{
		return $this->createdStart;
	}

	public function setOrderIds($orderIds)
	{
		$this->orderIds = $orderIds;
		$this->apiParas["order_ids"] = $orderIds;
	}

	public function getOrderIds()
	{
		return $this->orderIds;
	}

	public function setOrderTids($orderTids)
	{
		$this->orderTids = $orderTids;
		$this->apiParas["order_tids"] = $orderTids;
	}

	public function getOrderTids()
	{
		return $this->orderTids;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.order.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->createdEnd,"createdEnd");
		RequestCheckUtil::checkNotNull($this->createdStart,"createdStart");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
