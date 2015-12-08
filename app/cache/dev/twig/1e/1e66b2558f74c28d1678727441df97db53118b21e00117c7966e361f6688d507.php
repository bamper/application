<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a2d93f383a6531af7b168ba3be398e4731a5ae6c2507d560d9bb1fe0458afd57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b435aa163550e704effc90c307eff7f230ed9c074d4c9cf9307ea64b939fd3c4 = $this->env->getExtension("native_profiler");
        $__internal_b435aa163550e704effc90c307eff7f230ed9c074d4c9cf9307ea64b939fd3c4->enter($__internal_b435aa163550e704effc90c307eff7f230ed9c074d4c9cf9307ea64b939fd3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b435aa163550e704effc90c307eff7f230ed9c074d4c9cf9307ea64b939fd3c4->leave($__internal_b435aa163550e704effc90c307eff7f230ed9c074d4c9cf9307ea64b939fd3c4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_10c52b14a5d070d52604952c3ccadf45b48d15510ca773b6a2a9fe0562c5f6f3 = $this->env->getExtension("native_profiler");
        $__internal_10c52b14a5d070d52604952c3ccadf45b48d15510ca773b6a2a9fe0562c5f6f3->enter($__internal_10c52b14a5d070d52604952c3ccadf45b48d15510ca773b6a2a9fe0562c5f6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_10c52b14a5d070d52604952c3ccadf45b48d15510ca773b6a2a9fe0562c5f6f3->leave($__internal_10c52b14a5d070d52604952c3ccadf45b48d15510ca773b6a2a9fe0562c5f6f3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_53a83f599a9db56d41c1fe0e5ba85a63131c00a6ab0e065c2db357b762e9cb94 = $this->env->getExtension("native_profiler");
        $__internal_53a83f599a9db56d41c1fe0e5ba85a63131c00a6ab0e065c2db357b762e9cb94->enter($__internal_53a83f599a9db56d41c1fe0e5ba85a63131c00a6ab0e065c2db357b762e9cb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_53a83f599a9db56d41c1fe0e5ba85a63131c00a6ab0e065c2db357b762e9cb94->leave($__internal_53a83f599a9db56d41c1fe0e5ba85a63131c00a6ab0e065c2db357b762e9cb94_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea47527b373f24db9e49aee85d3608779574f1fc6ef7f8878b2729e7d562c64f = $this->env->getExtension("native_profiler");
        $__internal_ea47527b373f24db9e49aee85d3608779574f1fc6ef7f8878b2729e7d562c64f->enter($__internal_ea47527b373f24db9e49aee85d3608779574f1fc6ef7f8878b2729e7d562c64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ea47527b373f24db9e49aee85d3608779574f1fc6ef7f8878b2729e7d562c64f->leave($__internal_ea47527b373f24db9e49aee85d3608779574f1fc6ef7f8878b2729e7d562c64f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
