<?php
/**
 * TOP API: taobao.ump.channel.get request
 * 
 * @author auto create
 * @since 1.0, 2014-02-28 00:00:00
 */
class UmpChannelGetRequest
{
	/** 
	 * 渠道代码以逗号(半角)隔开，若channel_keys为空，则返回所有已维护的渠道信息。
	 **/
	private $channelKeys;
	
	private $apiParas = array();
	
	public function setChannelKeys($channelKeys)
	{
		$this->channelKeys = $channelKeys;
		$this->apiParas["channel_keys"] = $channelKeys;
	}

	public function getChannelKeys()
	{
		return $this->channelKeys;
	}

	public function getApiMethodName()
	{
		return "taobao.ump.channel.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
