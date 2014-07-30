<?php
/**
 * TOP API: taobao.kelude.bugs.update request
 * 
 * @author auto create
 * @since 1.0, 2013-12-02 00:00:00
 */
class KeludeBugsUpdateRequest
{
	/** 
	 * 缺陷指派人
	 **/
	private $assignedTo;
	
	/** 
	 * 修改此缺陷的操作人。可以是域账号、Kelude ID、邮箱或者工号中任意一个。
	 **/
	private $author;
	
	/** 
	 * 值：["1-PRD评审前" "2-PRD评审时" "3-PRD评审后UC评审前" "4-UC评审时" "5-UC评审后测试执行前" "6-测试执行期间" "7-预发期间" "8-发布后" "9-daily回归" "10-测试用例评审时" "11-发布前遗留"]
	 **/
	private $cf47;
	
	/** 
	 * 值：["1-很容易发现" "2-正常发现" "3-很难发现"]
	 **/
	private $cf57;
	
	/** 
	 * 自定义属性过滤。xx表示自定义属性的编号。常用如下：
cf_47:缺陷的发现阶段 值：["1-PRD评审前" "2-PRD评审时" "3-PRD评审后UC评审前" "4-UC评审时" "5-UC评审后测试执行前" "6-测试执行期间" "7-预发期间" "8-发布后" "9-daily回归" "10-测试用例评审时" "11-发布前遗留"]
cf_57:缺陷深度，值：["1-很容易发现"  "2-正常发现" "3-很难发现"]
更多自定义属性，请查询kelude后台管理->自定义属性
	 **/
	private $cfXx;
	
	/** 
	 * 详细描述。字数要求小于1000个字符
	 **/
	private $description;
	
	/** 
	 * 缺陷ID
	 **/
	private $id;
	
	/** 
	 * 修改缺陷时的注释信息
	 **/
	private $notes;
	
	/** 
	 * 优先级。据不同的优先级，BUG的期望修复时间不同。可选值：1(urgent,为24小时内)，2(high)，3(medium)，4（low）
	 **/
	private $priority;
	
	/** 
	 * 严重程度。可选值：87-90。分别表示1-Blocker、2-Major、3-Normal、4-Trivial
	 **/
	private $seriousLevel;
	
	/** 
	 * 缺陷状态。可选值为28-37。依次对应：New，Fixed，Reopen，Won'tfix，Open，Closed，Later，Worksforme，Duplicate，Invalid。
	 **/
	private $statusId;
	
	/** 
	 * 缺陷标题。字符要求1-255。
	 **/
	private $subject;
	
	/** 
	 * 缺陷关联的测试集编号
	 **/
	private $testsuiteId;
	
	/** 
	 * 项目/日常ID
	 **/
	private $versionId;
	
	/** 
	 * 跟踪者的用户编号。可以传入多个
	 **/
	private $watcherUserIds;
	
	private $apiParas = array();
	
	public function setAssignedTo($assignedTo)
	{
		$this->assignedTo = $assignedTo;
		$this->apiParas["assigned_to"] = $assignedTo;
	}

	public function getAssignedTo()
	{
		return $this->assignedTo;
	}

	public function setAuthor($author)
	{
		$this->author = $author;
		$this->apiParas["author"] = $author;
	}

	public function getAuthor()
	{
		return $this->author;
	}

	public function setCf47($cf47)
	{
		$this->cf47 = $cf47;
		$this->apiParas["cf_47"] = $cf47;
	}

	public function getCf47()
	{
		return $this->cf47;
	}

	public function setCf57($cf57)
	{
		$this->cf57 = $cf57;
		$this->apiParas["cf_57"] = $cf57;
	}

	public function getCf57()
	{
		return $this->cf57;
	}

	public function setCfXx($cfXx)
	{
		$this->cfXx = $cfXx;
		$this->apiParas["cf_xx"] = $cfXx;
	}

	public function getCfXx()
	{
		return $this->cfXx;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setNotes($notes)
	{
		$this->notes = $notes;
		$this->apiParas["notes"] = $notes;
	}

	public function getNotes()
	{
		return $this->notes;
	}

	public function setPriority($priority)
	{
		$this->priority = $priority;
		$this->apiParas["priority"] = $priority;
	}

	public function getPriority()
	{
		return $this->priority;
	}

	public function setSeriousLevel($seriousLevel)
	{
		$this->seriousLevel = $seriousLevel;
		$this->apiParas["serious_level"] = $seriousLevel;
	}

	public function getSeriousLevel()
	{
		return $this->seriousLevel;
	}

	public function setStatusId($statusId)
	{
		$this->statusId = $statusId;
		$this->apiParas["status_id"] = $statusId;
	}

	public function getStatusId()
	{
		return $this->statusId;
	}

	public function setSubject($subject)
	{
		$this->subject = $subject;
		$this->apiParas["subject"] = $subject;
	}

	public function getSubject()
	{
		return $this->subject;
	}

	public function setTestsuiteId($testsuiteId)
	{
		$this->testsuiteId = $testsuiteId;
		$this->apiParas["testsuite_id"] = $testsuiteId;
	}

	public function getTestsuiteId()
	{
		return $this->testsuiteId;
	}

	public function setVersionId($versionId)
	{
		$this->versionId = $versionId;
		$this->apiParas["version_id"] = $versionId;
	}

	public function getVersionId()
	{
		return $this->versionId;
	}

	public function setWatcherUserIds($watcherUserIds)
	{
		$this->watcherUserIds = $watcherUserIds;
		$this->apiParas["watcher_user_ids"] = $watcherUserIds;
	}

	public function getWatcherUserIds()
	{
		return $this->watcherUserIds;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.bugs.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->author,"author");
		RequestCheckUtil::checkMaxListSize($this->cf47,100,"cf47");
		RequestCheckUtil::checkMaxListSize($this->cf57,100,"cf57");
		RequestCheckUtil::checkMaxListSize($this->cfXx,5,"cfXx");
		RequestCheckUtil::checkNotNull($this->description,"description");
		RequestCheckUtil::checkMaxLength($this->description,1000,"description");
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkMaxLength($this->notes,65535,"notes");
		RequestCheckUtil::checkMaxListSize($this->statusId,15,"statusId");
		RequestCheckUtil::checkNotNull($this->subject,"subject");
		RequestCheckUtil::checkMaxLength($this->subject,255,"subject");
		RequestCheckUtil::checkMaxListSize($this->watcherUserIds,200,"watcherUserIds");
		RequestCheckUtil::checkMaxLength($this->watcherUserIds,200,"watcherUserIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
