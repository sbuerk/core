.. include:: ../../Includes.txt

=================================================================
Feature: #87616 - PSR-14 Event for modifying Page Link Generation
=================================================================

See :issue:`87616`

Description
===========

A new PSR-14 Event :php:`TYPO3\CMS\Frontend\Event\ModifyPageLinkConfigurationEvent`
has been introduced which serves as a more powerful and flexible alternative
for the now removed hook
:php:`$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typolinkProcessing']['typolinkModifyParameterForPageLinks']`.

The event is called after a page has already been resolved, and includes much
more arguments such as the generated fragment or the to-be-used query parameters.

The page to be linked to can also be modified to e.g. link to a different page.

Example
=======

Registration of the Event in your extensions' :file:`Services.yaml`:

.. code-block:: yaml

  MyVendor\MyPackage\Frontend\MyEventListener:
    tags:
      - name: event.listener
        identifier: 'my-package/frontend/modify-page-link-configuration'

The corresponding event listener class:

.. code-block:: php

    use TYPO3\CMS\Frontend\Event\ModifyPageLinkConfigurationEvent;

    class MyEventListener {

        public function __invoke(ModifyPageLinkConfigurationEvent $event): void
        {
            // Do your magic here
        }
    }

Impact
======

The main advantage of the PSR-14 Event is that it is fired after TYPO3 has
already prepared some functionality within the :php:`PageLinkBuilder`, allowing
to modify more properties, if needed.

.. index:: Frontend, ext:frontend
