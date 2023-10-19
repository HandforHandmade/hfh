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
        'master_options' => array(
            'item' => array(
                'main_item' => '0',
                'sub_item' => '1'
            ),
            'contact' => array(
                'assign' => 'assign',
                'remove' => 'remove'
            ),
            'opening_stock' => array(
                'pending' => 'Pending',
                'complete' => 'Complete',
                'close' => 'Close'
            )
        ),
        'tools' => array(
            'expense' => array(
                'pending' => 'Pending',
                'approve' => 'Approve',
                'partial' => 'Partial',
                'reject' => 'Reject',
                'complete' => 'complete'
            ),
            'task' => array(
                'pending' => 'Pending',
                'complete' => 'Complete',
                'return' => 'Return'
            ),
            'neft' => array(
                'pending' => 'Pending'
            ),
            'create_notes' => array(
                'under_process' => 'Under Process'
            ),
            'followup' => array(
                'pending' => 'pending',
                'next' => 'next',
                'close' => 'close'
            ),
            'userLoan' => array(
                'pending' => 'pending',
                'close' => 'close'
            )
        ),
        'project' => array(
            'project' => array(
                'pending' => 'pending',
                'under_process' => 'Under Process',
                'awarded_to_us' => 'avaided to us',
                'return' => 'return',
                'close' => 'close',
                'complete' => 'complete',
                'hold' => 'hold'
            ),
            'create_notes' => array(
                'under_process' => 'Under Process'
            ),
            'followup' => array(
                'pending' => 'pending',
                'next' => 'next',
                'close' => 'close'
            ),
            'assign' => array(
                'assign' => 'assign',
                'notAssign' => 'notAssign'
            ),
            'cop' => array(
                'pending' => 'pending',
                'approve' => 'approve',
                'partial' => 'partial',
                'reject' => 'reject'
            )
        ),
        'cms' => array(
            'tender' => array(
                'pending' => 'Pending',
                'reject' => 'Reject',
                'not_bidden' => 'Not Bidden',
                'bidden' => 'Bidden',
                'awarded_to_other' => 'Awarded to other',
                'awarded_to_us' => 'Awarded to Us',
                'approve' => 'approve'
            ),
            'emd' => array(
                'pending' => 'pending',
                'non_exempted' => 'Non Exempted',
                'approve' => 'approved',
                'submitted' => 'Submitted',
                'received' => 'Received'
            ),
            'sdisd' => array(
                'pending' => 'pending',
                'non_exempted' => 'Non Exempted',
                'not_approve' => 'notapproved',
                'approve' => 'approved',
                'submitted' => 'Submitted',
                'received' => 'Received'
            ),
            'dpr' => array(
                'pending' => 'pending'
            ),
            'userAssignWork' => array(
                '0' => 'Pending',
                '1' => 'Approve',
                '2' => 'Partial',
                '3' => 'Hold',
                '4' => 'Reject',
            ),
            'timeEntryType' => array(
                '0' => 'Default',
                '1' => 'Direct',
            ),
            'checkType' => array(
                'time' => 'time',
                'item' => 'item',
            )
        ),
        'store' => array(
            'item' => array(
                'pending' => 'pending',
                'purchase_pending' => 'pending'
            ),
            'inward' => array(
                'purchase_pending' => 'pending'
            ),
            'outward' => array(
                'pending' => 'pending'
            )
        ),
        'certificate' => array(
            'report' => array(
                'pending' => 'pending',
                'active' => 'active',
                'approve' => 'approve',
                'close' => 'close',
                'return' => 'return',
                'admin' => 'admin',
                'reject' => 'rejected'
            ),
            'renew' => array(
                'assign' => 'assign'
            )
        ),
        'crm' => array(
            'inquiry' => array(
                'active' => 'active',
                'close' => 'close'
            ),
            'quotation' => array(
                'pending' => 'pending',
                'approve' => 'approve',
                'reject' => 'reject'
            ),
            'invoice' => array(
                'pending' => 'pending',
                'approve' => 'approve',
                'reject' => 'reject'
            ),
            'followup' => array(
                'pending' => 'pending'
            ),
            'thirdPartyInquiry' => array(
                '0' => 'Pending',
                '1' => 'Close',
                '2' => 'Reject'
            ),
            'receipt' => array(
                'pending' => 'pending',
                'complete' => 'complete'
            )
        ),
        'purchase' => array(
            'purchase' => array(
                'pending' => 'pending',
                'close' => 'close',
                'reject' => 'reject',
                'approve' => 'approve'
            )
        ),
        'production' => array(
            'production' => array(
                'pending' => 'pending',
                'close' => 'close',
                'reject' => 'reject',
                'approve' => 'approve',
                'partial' => 'partial'
            ),
            'create_notes' => array(
                'under_process' => 'Under Process'
            ),
            'followup' => array(
                'pending' => 'pending',
                'next' => 'next',
                'close' => 'close'
            )
        ),
        'facility' => array(
            'PR' => array(
                'pending' => 'pending',
                'close' => 'close',
                'reject' => 'reject',
                'approve' => 'approve'
            )
        ),
        'hr' => array(
            'employee' => array(
                'employee_detail' => array(
                    'approve' => 'approve',
                    'active' => 'active'
                ),
            ),
            'leave' => array(
                'leave_management' => array(
                    'approve' => 'approve',
                    'pending' => 'pending',
                    'reject' => 'reject',
                    'hold' => 'hold'
                ),
            ),
            'hr_document' => array(
                'document' => array(
                    'pending' => 'pending',
                    'approve' => 'approve',
                    'reject' => 'reject',
                    'hold_on' => 'holdOn'
                )
            ),
            'salary' => array(
                'pending' => 'pending',
                'approve' => 'approve',
                'reject' => 'reject',
                'close' => 'close',
                'export'=> 'export'
            )
        ),
        'sales' => array(
            'salesorder' => array(
                'approve' => 'Approve',
                'pending' => 'Pending',
                'close' => 'Close',
                'reject' => 'Reject',
                'hold' => 'Hold'
            )
        ),
        'account' => array(
            'purchase' => array(
                'purchase_invoice' => array(
                    'close' => 'close',
                    'pending' => 'pending'
                ),
                'payment_advice' => array(
                    'complete' => 'complete',
                    'pending' => 'pending'
                ),
                'companyLoan' => array(
                    'pending' => 'pending',
                    'close' => 'close'
                ),
                'payroll' => array(
                    'close' => 'close',
                    'pending' => 'pending'
                ),
                'contact' => array(
                    'assign' => 'assign',
                    'remove' => 'remove'
                ),

            ),
            'loan' => array(
                'request' => 'request',
                'pending' => 'pending',
                'pay' => 'pay',
                'paid' => 'paid',
                'loan' => 'loan',
                'give' => 'give',
                'requestStatement' => 'REQUEST_STATEMENT',
                'loanStatement' => 'LOAN_STATEMENT',
                'reject' => 'reject',
                'approve' => 'approve'
            ),
            'contact' => array(
                'assign' => 'assign',
                'remove' => 'remove'
            ),

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
    protected $arrayAllDataLogic = array(

    );



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

    function generatePortfolioAttachmentUrl( $attachmentName)
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

?>


