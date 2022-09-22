<?php

/* @User/layout.html.twig */
class __TwigTemplate_fb927e2896cafe76b947b0798c1c2fb2d9eb14b48fc7836b6a75be483dde30df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c70a06cfb792307116c0e6739f61a571ef230e465fd582513af3efc872a26c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c70a06cfb792307116c0e6739f61a571ef230e465fd582513af3efc872a26c2c->enter($__internal_c70a06cfb792307116c0e6739f61a571ef230e465fd582513af3efc872a26c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout.html.twig"));

        $__internal_bf2a180082b7d76d3f87b92639c7e3b115992e2ffe3bd94cebede93c937bc9e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2a180082b7d76d3f87b92639c7e3b115992e2ffe3bd94cebede93c937bc9e7->enter($__internal_bf2a180082b7d76d3f87b92639c7e3b115992e2ffe3bd94cebede93c937bc9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.7 -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/admin-lte/bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- Theme style -->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/admin-lte/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- AdminLTE Skins -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/admin-lte/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- iCheck -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/admin-lte/plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- custom-login -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/css/custom-login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

    <body class=\"hold-transition login-page\">
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <img src=\"/img/header.png\" alt=\"logo\" />
        </div>

        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Accès Contrôle technique</p>

            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 38
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 39
                echo "                    <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                        ";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
            ";
        // line 45
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 47
        echo "        </div>
    </div>

    </body>
</html>

";
        
        $__internal_c70a06cfb792307116c0e6739f61a571ef230e465fd582513af3efc872a26c2c->leave($__internal_c70a06cfb792307116c0e6739f61a571ef230e465fd582513af3efc872a26c2c_prof);

        
        $__internal_bf2a180082b7d76d3f87b92639c7e3b115992e2ffe3bd94cebede93c937bc9e7->leave($__internal_bf2a180082b7d76d3f87b92639c7e3b115992e2ffe3bd94cebede93c937bc9e7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5b84a3d8cfdf6dc5d2cd81989bc60c5d2114c2bc5cd46f70045d72cdaa2287b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b84a3d8cfdf6dc5d2cd81989bc60c5d2114c2bc5cd46f70045d72cdaa2287b->enter($__internal_a5b84a3d8cfdf6dc5d2cd81989bc60c5d2114c2bc5cd46f70045d72cdaa2287b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f861ce926a2c0e2d74c2e9e798ebaf66ccfe15433e7306cdde9d93fd0869d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f861ce926a2c0e2d74c2e9e798ebaf66ccfe15433e7306cdde9d93fd0869d5f->enter($__internal_8f861ce926a2c0e2d74c2e9e798ebaf66ccfe15433e7306cdde9d93fd0869d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accès Contrôle technique ";
        
        $__internal_8f861ce926a2c0e2d74c2e9e798ebaf66ccfe15433e7306cdde9d93fd0869d5f->leave($__internal_8f861ce926a2c0e2d74c2e9e798ebaf66ccfe15433e7306cdde9d93fd0869d5f_prof);

        
        $__internal_a5b84a3d8cfdf6dc5d2cd81989bc60c5d2114c2bc5cd46f70045d72cdaa2287b->leave($__internal_a5b84a3d8cfdf6dc5d2cd81989bc60c5d2114c2bc5cd46f70045d72cdaa2287b_prof);

    }

    // line 45
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f21e47e9fe4416752b32f2647ada71ccbffac462bbd4ca5c8e8d8800b258d809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f21e47e9fe4416752b32f2647ada71ccbffac462bbd4ca5c8e8d8800b258d809->enter($__internal_f21e47e9fe4416752b32f2647ada71ccbffac462bbd4ca5c8e8d8800b258d809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0485c8c295d213271a656a93e5f7c3894d0cc8a146190f37fcc84c9f7e53cbad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0485c8c295d213271a656a93e5f7c3894d0cc8a146190f37fcc84c9f7e53cbad->enter($__internal_0485c8c295d213271a656a93e5f7c3894d0cc8a146190f37fcc84c9f7e53cbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 46
        echo "            ";
        
        $__internal_0485c8c295d213271a656a93e5f7c3894d0cc8a146190f37fcc84c9f7e53cbad->leave($__internal_0485c8c295d213271a656a93e5f7c3894d0cc8a146190f37fcc84c9f7e53cbad_prof);

        
        $__internal_f21e47e9fe4416752b32f2647ada71ccbffac462bbd4ca5c8e8d8800b258d809->leave($__internal_f21e47e9fe4416752b32f2647ada71ccbffac462bbd4ca5c8e8d8800b258d809_prof);

    }

    public function getTemplateName()
    {
        return "@User/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 46,  151 => 45,  133 => 7,  117 => 47,  115 => 45,  112 => 44,  106 => 43,  97 => 40,  92 => 39,  87 => 38,  83 => 37,  62 => 19,  57 => 17,  52 => 15,  47 => 13,  42 => 11,  35 => 7,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>{% block title %} Accès Contrôle technique {% endblock %}</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.7 -->
        <link href=\"{{ asset('plugins/admin-lte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
        <!-- Theme style -->
        <link href=\"{{ asset('plugins/admin-lte/dist/css/AdminLTE.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- AdminLTE Skins -->
        <link href=\"{{ asset('plugins/admin-lte/dist/css/skins/_all-skins.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- iCheck -->
        <link href=\"{{ asset('plugins/admin-lte/plugins/iCheck/flat/blue.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- custom-login -->
        <link href=\"{{ asset('backoffice/css/custom-login.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

    <body class=\"hold-transition login-page\">
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <img src=\"/img/header.png\" alt=\"logo\" />
        </div>

        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Accès Contrôle technique</p>

            {% for type, messages in app.session.flashBag.all %}
                {% for message in messages %}
                    <div class=\"{{ type }}\">
                        {{ message|trans({}, 'FOSUserBundle') }}
                    </div>
                {% endfor %}
            {% endfor %}

            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </div>

    </body>
</html>

", "@User/layout.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
