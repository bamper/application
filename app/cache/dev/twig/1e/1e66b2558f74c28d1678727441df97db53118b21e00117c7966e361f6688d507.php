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
        $__internal_451e6adf31f69f2c550cfe7efa084649738aa73d259f06caa717e75de432261f = $this->env->getExtension("native_profiler");
        $__internal_451e6adf31f69f2c550cfe7efa084649738aa73d259f06caa717e75de432261f->enter($__internal_451e6adf31f69f2c550cfe7efa084649738aa73d259f06caa717e75de432261f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_451e6adf31f69f2c550cfe7efa084649738aa73d259f06caa717e75de432261f->leave($__internal_451e6adf31f69f2c550cfe7efa084649738aa73d259f06caa717e75de432261f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a48b142509509a10f3c16a52670fd7e38f30e16056386d52a8735c876f2297b = $this->env->getExtension("native_profiler");
        $__internal_2a48b142509509a10f3c16a52670fd7e38f30e16056386d52a8735c876f2297b->enter($__internal_2a48b142509509a10f3c16a52670fd7e38f30e16056386d52a8735c876f2297b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2a48b142509509a10f3c16a52670fd7e38f30e16056386d52a8735c876f2297b->leave($__internal_2a48b142509509a10f3c16a52670fd7e38f30e16056386d52a8735c876f2297b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6948d993ee273cc5056cd38fd424ae3962777b1eaceed21aaa28a47314782521 = $this->env->getExtension("native_profiler");
        $__internal_6948d993ee273cc5056cd38fd424ae3962777b1eaceed21aaa28a47314782521->enter($__internal_6948d993ee273cc5056cd38fd424ae3962777b1eaceed21aaa28a47314782521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6948d993ee273cc5056cd38fd424ae3962777b1eaceed21aaa28a47314782521->leave($__internal_6948d993ee273cc5056cd38fd424ae3962777b1eaceed21aaa28a47314782521_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fea7b796ec3214e1a507acd5ee7e0cfbea656580593b73e5e5d2734ea29afbb = $this->env->getExtension("native_profiler");
        $__internal_7fea7b796ec3214e1a507acd5ee7e0cfbea656580593b73e5e5d2734ea29afbb->enter($__internal_7fea7b796ec3214e1a507acd5ee7e0cfbea656580593b73e5e5d2734ea29afbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7fea7b796ec3214e1a507acd5ee7e0cfbea656580593b73e5e5d2734ea29afbb->leave($__internal_7fea7b796ec3214e1a507acd5ee7e0cfbea656580593b73e5e5d2734ea29afbb_prof);

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
