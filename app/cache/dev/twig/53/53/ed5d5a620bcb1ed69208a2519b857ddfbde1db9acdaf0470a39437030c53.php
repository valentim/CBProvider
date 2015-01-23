<?php

/* CricketBrasilSearchBundle:Default:set.html.twig */
class __TwigTemplate_5353ed5d5a620bcb1ed69208a2519b857ddfbde1db9acdaf0470a39437030c53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo $this->env->getExtension('dump')->dump($this->env, $context, $this->getContext($context, "user"));
        echo "!
";
    }

    public function getTemplateName()
    {
        return "CricketBrasilSearchBundle:Default:set.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
