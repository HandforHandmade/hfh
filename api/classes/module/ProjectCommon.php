<?php

/* @author: Pinank Soni
 * @trait : ProjectCommon
 * @desc: All Project Common Function Declare Here
 * */
trait ProjectCommon
{
    /* File Path Structure And File Prefix Name */
    protected $filePathStructure = array(
        'root' => "..",
        'attachment' => "../assets/attachment/",
        'portfolio' => "portfolio/",
        'users' => "users/",
        'catalogue' => "catalogue/",

    );

    protected $arrayAllStatus = array(
        'sessions' => array(
            'user' => array(
                'enable' => 'active',
                'disable' => 'deactive'
            )
        ),

    );

    protected $arrayAllActionType = array(
        'sessions' => array(
            'splash_login' => 'splashLogin',
            'login' => 'login'
        ),


    );
    protected $filePrefixName = array(
        'portfolio' => "portfolio_",
        'users' => "users_",
        'users' => "catalogue_",
    );

    /* constants generation key */
    protected $urlKeyUniqueId = "?uniqueid=";



    protected $userEnable = 1;



    /* all data logic */
    protected $arrayAllDataLogic = array();



    function generateAttachmentFilePath($filePathStructure)
    {
        return $this->filePathStructure['attachment'] . $filePathStructure;
    }

    function generateAttachmentFileName($filePrefixName, $attachmentName, $otherPostfix = "", $putFileName = "")
    {
        if ($this->isNotNullOrEmptyOrZero($putFileName)) {
            return $filePrefixName . $putFileName;
        } else {
            return $filePrefixName . $this->getDateTime('YmdHis') . $this->getUniqId() . $otherPostfix . $this->getExtension($attachmentName, true);
        }
    }

    /* create encode uniqueId */
    function encodeUniqueId($userId, $companyMasterKey = "")
    {
        $companyKey = $companyMasterKey;
        if ($this->isNullOrEmptyOrZero($companyKey)) {
            $companyKey = 'HFH';
        }
        if (
            $this->isNotNullOrEmptyOrZero($companyKey) && $this->isNotNullOrEmptyOrZero($userId)
        ) {
            return base64_encode($companyKey . '##' . $userId);
        } else {
            return "";
        }
    }

    function uploadAttachment($filePathStructure, $filePrefixName, $attachmentName = '', $attachmentBase64Str = '', $otherPostfix = "", $putFileName = "", $isTicket = false)
    {
        $fileNameArray = array();
        $i = 0;
        if (!empty($_FILES[$this->ERPFileElement]['name'])) {
            foreach ($_FILES[$this->ERPFileElement]['name'] as $file => $data) {
                $fileTempPath = $_FILES[$this->ERPFileElement]['tmp_name'][$i];
                $fileOriginalName = $_FILES[$this->ERPFileElement]['name'][$i];

                $attachmentFileName = $this->generateAttachmentFileName($filePrefixName, $fileOriginalName, $otherPostfix, $putFileName);
                $attachmentFilePath = $this->generateAttachmentFilePath($filePathStructure);

                $fileFullPath = $attachmentFilePath . $attachmentFileName;

                if ($this->createDirectory($attachmentFilePath)) {
                    if (!move_uploaded_file($fileTempPath, $fileFullPath)) {
                        //throw new Exception('Could not move file');
                    }
                    $fileNameArray[$i]['filePath'] = $fileFullPath;
                    $fileNameArray[$i]['fileOriginalName'] = $fileOriginalName;
                    $fileNameArray[$i]['fileName'] = $attachmentFileName;
                    $i++;
                }
            }
        } else {
            $attachmentFileName = $this->generateAttachmentFileName($filePrefixName, $attachmentName, $otherPostfix, $putFileName);
            $attachmentFilePath = $this->generateAttachmentFilePath($filePathStructure);
            if ($this->createDirectory($attachmentFilePath)) {
                if (file_put_contents($attachmentFilePath . $attachmentFileName, base64_decode($attachmentBase64Str))) {
                    $fileNameArray['fileName'] = $attachmentFileName;
                }
            }
        }
        return $fileNameArray;
    }

    /* get microseconds name */
    function getMicroSeconds($preFix = '')
    {
        return $preFix . round(microtime(true) * 1000);
    }

    /* get uniqId */
    function getUniqId($preFix = '')
    {
        return $preFix . "_" . uniqid();
    }

    function isFileUpdate($isAddFile = false)
    {
        $isFileUpdate = false;
        if ($this->isNotNullOrEmptyOrZero($this->deleteAttachmentArray)) {
            $isFileUpdate = true;
            if ($isAddFile) {
                if ($this->isAttachmentUpdate) {
                    $isFileUpdate = true;
                } else {
                    $isFileUpdate = false;
                }
            }
        } else if ($this->isAttachmentUpdate) {
            $isFileUpdate = true;
        }

        return $isFileUpdate;
    }

    function generatePortfolioAttachmentUrl($attachmentName)
    {
        $url = '';
        if ($this->isNotNullOrEmptyOrZero($attachmentName)) {
            $url = $this->baseUrlAttachment . $this->filePathStructure['portfolio'] . $attachmentName;
        }
        return $url;
    }

    function generateUserProfileAttachmentUrl($attachmentName)
    {
        $url = '';
        if ($this->isNotNullOrEmptyOrZero($attachmentName)) {
            $url = $this->baseUrlAttachment . $this->filePathStructure['users'] . $attachmentName;
        }
        return $url;
    }

    /* delete attachment */
    function deleteAttachment($filePathStructure, $attachmentName)
    {
        if ($this->isNotNullOrEmptyOrZero($attachmentName)) {
            unlink($this->filePathStructure['attachment'] . $filePathStructure . $attachmentName);
        }
    }

    function generateCatalogueAttachmentUrl($attachmentName)
    {
        $url = '';
        if ($this->isNotNullOrEmptyOrZero($attachmentName)) {
            $url = $this->baseUrlAttachment . $this->filePathStructure['catalogue'] . $attachmentName;
        }
        return $url;
    }
}
