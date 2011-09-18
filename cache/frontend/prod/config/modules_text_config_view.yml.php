<?php
// auto-generated by sfViewConfigHandler
// date: 2011/09/18 18:50:11
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'iframeNewSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'newSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}

if ($templateName.$this->viewName == 'iframeNewSuccess')
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
  $response->addJavascript('/sfDoctrineGuardPlugin/js/jquery-1.6.1.js', '', array ());
  $response->addJavascript('/sfDoctrineGuardPlugin/js/livevalidation_standalone.compressed.js', '', array ());
}
else if ($templateName.$this->viewName == 'newSuccess')
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
  $response->addJavascript('/sfDoctrineGuardPlugin/js/jquery-1.6.1.js', '', array ());
  $response->addJavascript('/sfDoctrineGuardPlugin/js/livevalidation_standalone.compressed.js', '', array ());
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
  $response->addJavascript('/sfDoctrineGuardPlugin/js/jquery-1.6.1.js', '', array ());
  $response->addJavascript('/sfDoctrineGuardPlugin/js/livevalidation_standalone.compressed.js', '', array ());
}

