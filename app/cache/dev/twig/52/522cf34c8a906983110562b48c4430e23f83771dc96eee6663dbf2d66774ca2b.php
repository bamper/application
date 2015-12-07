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
        $__internal_7fc5ab0ad40ce644f035f87b6d737c29ccabfaacaf15dcb28f09a3357d3ecfaa = $this->env->getExtension("native_profiler");
        $__internal_7fc5ab0ad40ce644f035f87b6d737c29ccabfaacaf15dcb28f09a3357d3ecfaa->enter($__internal_7fc5ab0ad40ce644f035f87b6d737c29ccabfaacaf15dcb28f09a3357d3ecfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fc5ab0ad40ce644f035f87b6d737c29ccabfaacaf15dcb28f09a3357d3ecfaa->leave($__internal_7fc5ab0ad40ce644f035f87b6d737c29ccabfaacaf15dcb28f09a3357d3ecfaa_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_58428bc190e901f6ebc160a1c8df52b3720865b8d9c7f40472639c45670aa9d9 = $this->env->getExtension("native_profiler");
        $__internal_58428bc190e901f6ebc160a1c8df52b3720865b8d9c7f40472639c45670aa9d9->enter($__internal_58428bc190e901f6ebc160a1c8df52b3720865b8d9c7f40472639c45670aa9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

 ";
        
        $__internal_58428bc190e901f6ebc160a1c8df52b3720865b8d9c7f40472639c45670aa9d9->leave($__internal_58428bc190e901f6ebc160a1c8df52b3720865b8d9c7f40472639c45670aa9d9_prof);

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
/*  {% extends '::layout.html.twig' %}*/
/* */
/*  {% block content %}*/
/* */
/* */
/*  {% endblock %}*/
