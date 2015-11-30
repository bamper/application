<?php

/* AppBundle:Page:index.html.twig */
class __TwigTemplate_2fef28825174b94ddc04dbff9ba7277f5ac9a4b003933692f936edb3fe07d181 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AppBundle:Page:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcf19921fc2734964e5567346e30083634ace86a242963f854a3003df0401af4 = $this->env->getExtension("native_profiler");
        $__internal_fcf19921fc2734964e5567346e30083634ace86a242963f854a3003df0401af4->enter($__internal_fcf19921fc2734964e5567346e30083634ace86a242963f854a3003df0401af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcf19921fc2734964e5567346e30083634ace86a242963f854a3003df0401af4->leave($__internal_fcf19921fc2734964e5567346e30083634ace86a242963f854a3003df0401af4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8b60a45d103d86c311b3d759e3a4329e4392f976ccda48e61329e2bc45ad4f14 = $this->env->getExtension("native_profiler");
        $__internal_8b60a45d103d86c311b3d759e3a4329e4392f976ccda48e61329e2bc45ad4f14->enter($__internal_8b60a45d103d86c311b3d759e3a4329e4392f976ccda48e61329e2bc45ad4f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <p>test</p>

";
        
        $__internal_8b60a45d103d86c311b3d759e3a4329e4392f976ccda48e61329e2bc45ad4f14->leave($__internal_8b60a45d103d86c311b3d759e3a4329e4392f976ccda48e61329e2bc45ad4f14_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     <p>test</p>*/
/* */
/* {% endblock %}*/
