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
        $__internal_62a0f38feee72724d6d2391a439e1c18c0b8c6e4cbd6920612e89d2cf07c84cc = $this->env->getExtension("native_profiler");
        $__internal_62a0f38feee72724d6d2391a439e1c18c0b8c6e4cbd6920612e89d2cf07c84cc->enter($__internal_62a0f38feee72724d6d2391a439e1c18c0b8c6e4cbd6920612e89d2cf07c84cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62a0f38feee72724d6d2391a439e1c18c0b8c6e4cbd6920612e89d2cf07c84cc->leave($__internal_62a0f38feee72724d6d2391a439e1c18c0b8c6e4cbd6920612e89d2cf07c84cc_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_15e1a90bb12d40e1819f4ab727fbd6805419f57f37da9c7e1fdb03db3dd02964 = $this->env->getExtension("native_profiler");
        $__internal_15e1a90bb12d40e1819f4ab727fbd6805419f57f37da9c7e1fdb03db3dd02964->enter($__internal_15e1a90bb12d40e1819f4ab727fbd6805419f57f37da9c7e1fdb03db3dd02964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

 ";
        
        $__internal_15e1a90bb12d40e1819f4ab727fbd6805419f57f37da9c7e1fdb03db3dd02964->leave($__internal_15e1a90bb12d40e1819f4ab727fbd6805419f57f37da9c7e1fdb03db3dd02964_prof);

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
