<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_a82a929930a5c5f9c33d0c27de85dbb28c5c5edab24cd0ae558555f97e3017cc extends Twig_Template
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
        $__internal_6de45678ea4e706ae8d1b1cc1f19e6ae1fd40fe8bf9209cde77b96ae56b71993 = $this->env->getExtension("native_profiler");
        $__internal_6de45678ea4e706ae8d1b1cc1f19e6ae1fd40fe8bf9209cde77b96ae56b71993->enter($__internal_6de45678ea4e706ae8d1b1cc1f19e6ae1fd40fe8bf9209cde77b96ae56b71993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6de45678ea4e706ae8d1b1cc1f19e6ae1fd40fe8bf9209cde77b96ae56b71993->leave($__internal_6de45678ea4e706ae8d1b1cc1f19e6ae1fd40fe8bf9209cde77b96ae56b71993_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
