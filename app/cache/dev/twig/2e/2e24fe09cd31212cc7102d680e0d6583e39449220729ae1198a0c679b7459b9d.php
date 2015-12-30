<?php

/* ::base.html.twig */
class __TwigTemplate_739c3781312e1688cdae660469146766dc25f4de22533043e5599df71cb02de4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_216540a75b17b041b3e62cbed8e6d68ee4badaefbe12467755beb307f72c5e79 = $this->env->getExtension("native_profiler");
        $__internal_216540a75b17b041b3e62cbed8e6d68ee4badaefbe12467755beb307f72c5e79->enter($__internal_216540a75b17b041b3e62cbed8e6d68ee4badaefbe12467755beb307f72c5e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"iso-8859-2\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "
</body>
</html>
";
        
        $__internal_216540a75b17b041b3e62cbed8e6d68ee4badaefbe12467755beb307f72c5e79->leave($__internal_216540a75b17b041b3e62cbed8e6d68ee4badaefbe12467755beb307f72c5e79_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fb0b2a21f2bf4cf6fe19c80ed95ae539746ff5bac7e9b0417981d4f13f43a67 = $this->env->getExtension("native_profiler");
        $__internal_8fb0b2a21f2bf4cf6fe19c80ed95ae539746ff5bac7e9b0417981d4f13f43a67->enter($__internal_8fb0b2a21f2bf4cf6fe19c80ed95ae539746ff5bac7e9b0417981d4f13f43a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8fb0b2a21f2bf4cf6fe19c80ed95ae539746ff5bac7e9b0417981d4f13f43a67->leave($__internal_8fb0b2a21f2bf4cf6fe19c80ed95ae539746ff5bac7e9b0417981d4f13f43a67_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6d726dcc307de3fd216b5bc83187384eec7ae26d111a8c1eb17effca652e0a2 = $this->env->getExtension("native_profiler");
        $__internal_b6d726dcc307de3fd216b5bc83187384eec7ae26d111a8c1eb17effca652e0a2->enter($__internal_b6d726dcc307de3fd216b5bc83187384eec7ae26d111a8c1eb17effca652e0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\"/>

    ";
        
        $__internal_b6d726dcc307de3fd216b5bc83187384eec7ae26d111a8c1eb17effca652e0a2->leave($__internal_b6d726dcc307de3fd216b5bc83187384eec7ae26d111a8c1eb17effca652e0a2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_4197f96312f60145ad8e6d4a7dfd1ad17239893944b95e4976ee5c4443d9b560 = $this->env->getExtension("native_profiler");
        $__internal_4197f96312f60145ad8e6d4a7dfd1ad17239893944b95e4976ee5c4443d9b560->enter($__internal_4197f96312f60145ad8e6d4a7dfd1ad17239893944b95e4976ee5c4443d9b560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4197f96312f60145ad8e6d4a7dfd1ad17239893944b95e4976ee5c4443d9b560->leave($__internal_4197f96312f60145ad8e6d4a7dfd1ad17239893944b95e4976ee5c4443d9b560_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fdc7bf5fe51b7ad46eaca19b45e8437cac4788ae2543941a2b5bde10f67419ba = $this->env->getExtension("native_profiler");
        $__internal_fdc7bf5fe51b7ad46eaca19b45e8437cac4788ae2543941a2b5bde10f67419ba->enter($__internal_fdc7bf5fe51b7ad46eaca19b45e8437cac4788ae2543941a2b5bde10f67419ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_fdc7bf5fe51b7ad46eaca19b45e8437cac4788ae2543941a2b5bde10f67419ba->leave($__internal_fdc7bf5fe51b7ad46eaca19b45e8437cac4788ae2543941a2b5bde10f67419ba_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 20,  114 => 19,  111 => 18,  105 => 17,  94 => 16,  84 => 10,  79 => 9,  73 => 8,  61 => 7,  51 => 22,  49 => 17,  47 => 16,  40 => 13,  38 => 8,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html" charset="iso-8859-2" />*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('bundles/app/css/bootstrap.min.css') }}"/>*/
/*         <link rel="stylesheet" href="{{ asset('bundles/app/css/style.css') }}"/>*/
/* */
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* {% block body %}{% endblock %}*/
/* {% block javascripts %}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>*/
/*     <script src="{{ asset('bundles/app/js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/app/js/main.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */
