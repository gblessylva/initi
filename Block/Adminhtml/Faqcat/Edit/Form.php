<?php

/**
 *
 * @Author              Ngo Quang Cuong <bestearnmoney87@gmail.com>
 * @Date                2016-12-19 23:28:33
 * @Last modified by:   nquangcuong
 * @Last Modified time: 2016-12-24 15:31:13
 */

namespace BuyRite\Faq\Block\Adminhtml\Faqcat\Edit;

use \Magento\Backend\Block\Widget\Form\Generic;

class Form extends Generic
{
    /**
     * Initialize theme form
     *
     * @return \Magento\Theme\Block\Adminhtml\System\Design\Theme\Edit\Form|\Magento\Backend\Block\Widget\Form
     */
    protected function _prepareForm()
    {
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create(
            [
                'data' => [
                    'id' => 'edit_form',
                    'action' => $this->getData('action'),
                    'method' => 'post',
                    'enctype' => 'multipart/form-data'
                ],
            ]
        );

        $form->setUseContainer(true);

        $this->setForm($form);

        return parent::_prepareForm();
    }
}
