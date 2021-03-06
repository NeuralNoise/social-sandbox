<?php
// auto-generated by sfViewConfigHandler
// date: 2011/09/18 19:37:14
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'newSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'showSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}

if ($templateName.$this->viewName == 'newSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == '' ? false : ''.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('/PubsPlugin/css/main.css', '', array ());
  $response->addStylesheet('/InboxPlugin/css/inbox.css', '', array ());
  $response->addStylesheet('/sfFormExtraPlugin/css/jquery.autocompleter.css', '', array ());
  $response->addStylesheet('/PubsPlugin/css/facebox.css', '', array ());
  $response->addJavascript('/sfDoctrineGuardPlugin/js/jquery-1.4.2.js', '', array ());
  $response->addJavascript('/sfFormExtraPlugin/js/jquery.autocompleter.js', '', array ());
  $response->addJavascript('/PubsPlugin/js/facebox.js', '', array ());
  $response->addJavascript('/PubsPlugin/js/ui.core.js', '', array ());
  $response->addJavascript('/PubsPlugin/js/ui.draggable.js', '', array ());
}
else if ($templateName.$this->viewName == 'showSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == '' ? false : ''.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('/PubsPlugin/css/main.css', '', array ());
  $response->addStylesheet('/InboxPlugin/css/inbox.css', '', array ());
  $response->addStylesheet('/sfFormExtraPlugin/css/jquery.autocompleter.css', '', array ());
  $response->addStylesheet('/PubsPlugin/css/facebox.css', '', array ());
  $response->addJavascript('/sfDoctrineGuardPlugin/js/jquery-1.4.2.js', '', array ());
  $response->addJavascript('/sfFormExtraPlugin/js/jquery.autocompleter.js', '', array ());
  $response->addJavascript('/PubsPlugin/js/facebox.js', '', array ());
  $response->addJavascript('/PubsPlugin/js/ui.core.js', '', array ());
  $response->addJavascript('/PubsPlugin/js/ui.draggable.js', '', array ());
}
else
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('/PubsPlugin/css/main.css', '', array ());
  $response->addStylesheet('/InboxPlugin/css/inbox.css', '', array ());
  $response->addStylesheet('/sfFormExtraPlugin/css/jquery.autocompleter.css', '', array ());
  $response->addStylesheet('/PubsPlugin/css/facebox.css', '', array ());
  $response->addJavascript('/sfDoctrineGuardPlugin/js/jquery-1.4.2.js', '', array ());
  $response->addJavascript('/sfFormExtraPlugin/js/jquery.autocompleter.js', '', array ());
  $response->addJavascript('/PubsPlugin/js/facebox.js', '', array ());
  $response->addJavascript('/PubsPlugin/js/ui.core.js', '', array ());
  $response->addJavascript('/PubsPlugin/js/ui.draggable.js', '', array ());
}

