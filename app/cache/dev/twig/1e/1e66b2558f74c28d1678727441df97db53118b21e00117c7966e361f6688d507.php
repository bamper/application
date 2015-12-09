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
        $__internal_de6fbfc303db3fb285eaed8cd8f0e569702541da78637a77c40fd20e3715f189 = $this->env->getExtension("native_profiler");
        $__internal_de6fbfc303db3fb285eaed8cd8f0e569702541da78637a77c40fd20e3715f189->enter($__internal_de6fbfc303db3fb285eaed8cd8f0e569702541da78637a77c40fd20e3715f189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de6fbfc303db3fb285eaed8cd8f0e569702541da78637a77c40fd20e3715f189->leave($__internal_de6fbfc303db3fb285eaed8cd8f0e569702541da78637a77c40fd20e3715f189_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_45e1f257c11cfc7904972bbcbe9202815bd5584b25a5bccb372faf6db7b9abc7 = $this->env->getExtension("native_profiler");
        $__internal_45e1f257c11cfc7904972bbcbe9202815bd5584b25a5bccb372faf6db7b9abc7->enter($__internal_45e1f257c11cfc7904972bbcbe9202815bd5584b25a5bccb372faf6db7b9abc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_45e1f257c11cfc7904972bbcbe9202815bd5584b25a5bccb372faf6db7b9abc7->leave($__internal_45e1f257c11cfc7904972bbcbe9202815bd5584b25a5bccb372faf6db7b9abc7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0043a1b8d5534d6b22fe45a929560c65232fa70833902031da0ae38e8c7c2877 = $this->env->getExtension("native_profiler");
        $__internal_0043a1b8d5534d6b22fe45a929560c65232fa70833902031da0ae38e8c7c2877->enter($__internal_0043a1b8d5534d6b22fe45a929560c65232fa70833902031da0ae38e8c7c2877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0043a1b8d5534d6b22fe45a929560c65232fa70833902031da0ae38e8c7c2877->leave($__internal_0043a1b8d5534d6b22fe45a929560c65232fa70833902031da0ae38e8c7c2877_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fdaacf196d2bccb5481e2f86bf868f835484215c3ff03e7f706631049574e73 = $this->env->getExtension("native_profiler");
        $__internal_2fdaacf196d2bccb5481e2f86bf868f835484215c3ff03e7f706631049574e73->enter($__internal_2fdaacf196d2bccb5481e2f86bf868f835484215c3ff03e7f706631049574e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2fdaacf196d2bccb5481e2f86bf868f835484215c3ff03e7f706631049574e73->leave($__internal_2fdaacf196d2bccb5481e2f86bf868f835484215c3ff03e7f706631049574e73_prof);

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
