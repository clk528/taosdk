<?php
/**
 * TOP API: taobao.lpmarket.price.update request
 * 
 * @author auto create
 * @since 1.0, 2014-02-11 00:00:00
 */
class LpmarketPriceUpdateRequest
{
	/** 
	 * sku所在的城市
	 **/
	private $city;
	
	/** 
	 * 外部商城的skuid
	 **/
	private $outSkuId;
	
	/** 
	 * 更新的价格
	 **/
	private $price;
	
	private $apiParas = array();
	
	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setOutSkuId($outSkuId)
	{
		$this->outSkuId = $outSkuId;
		$this->apiParas["out_sku_id"] = $outSkuId;
	}

	public function getOutSkuId()
	{
		return $this->outSkuId;
	}

	public function setPrice($price)
	{
		$this->price = $price;
		$this->apiParas["price"] = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function getApiMethodName()
	{
		return "taobao.lpmarket.price.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->city,"city");
		RequestCheckUtil::checkMaxLength($this->city,20,"city");
		RequestCheckUtil::checkNotNull($this->outSkuId,"outSkuId");
		RequestCheckUtil::checkMaxLength($this->outSkuId,64,"outSkuId");
		RequestCheckUtil::checkNotNull($this->price,"price");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
