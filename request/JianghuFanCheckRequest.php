<?php
/**
 * TOP API: taobao.jianghu.fan.check request
 * 
 * @author auto create
 * @since 1.0, 2014-02-20 00:00:00
 */
class JianghuFanCheckRequest
{
	/** 
	 * 粉丝的id
	 **/
	private $followerId;
	
	/** 
	 * 达人的id值
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setFollowerId($followerId)
	{
		$this->followerId = $followerId;
		$this->apiParas["follower_id"] = $followerId;
	}

	public function getFollowerId()
	{
		return $this->followerId;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.fan.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->followerId,"followerId");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
