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
        $__internal_ed3ec736018c84dc43442744176ec3dac4b3ee45e96790150c11ff5063855543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3ec736018c84dc43442744176ec3dac4b3ee45e96790150c11ff5063855543->enter($__internal_ed3ec736018c84dc43442744176ec3dac4b3ee45e96790150c11ff5063855543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout.html.twig"));

        $__internal_b34540b7bbc66088e1add1a2f97b099846a1908f53294a0e1d6614dd8c9d9fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34540b7bbc66088e1add1a2f97b099846a1908f53294a0e1d6614dd8c9d9fdc->enter($__internal_b34540b7bbc66088e1add1a2f97b099846a1908f53294a0e1d6614dd8c9d9fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout.html.twig"));

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
        
        $__internal_ed3ec736018c84dc43442744176ec3dac4b3ee45e96790150c11ff5063855543->leave($__internal_ed3ec736018c84dc43442744176ec3dac4b3ee45e96790150c11ff5063855543_prof);

        
        $__internal_b34540b7bbc66088e1add1a2f97b099846a1908f53294a0e1d6614dd8c9d9fdc->leave($__internal_b34540b7bbc66088e1add1a2f97b099846a1908f53294a0e1d6614dd8c9d9fdc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_21514ff1b5361b9670131c29f96c6049543358c294fe6fc988354e8b25c6a577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21514ff1b5361b9670131c29f96c6049543358c294fe6fc988354e8b25c6a577->enter($__internal_21514ff1b5361b9670131c29f96c6049543358c294fe6fc988354e8b25c6a577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06030d470da6bc32691c8aa7e427ee78e975fc29d272670ef967acf6bf9e0553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06030d470da6bc32691c8aa7e427ee78e975fc29d272670ef967acf6bf9e0553->enter($__internal_06030d470da6bc32691c8aa7e427ee78e975fc29d272670ef967acf6bf9e0553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accès Contrôle technique ";
        
        $__internal_06030d470da6bc32691c8aa7e427ee78e975fc29d272670ef967acf6bf9e0553->leave($__internal_06030d470da6bc32691c8aa7e427ee78e975fc29d272670ef967acf6bf9e0553_prof);

        
        $__internal_21514ff1b5361b9670131c29f96c6049543358c294fe6fc988354e8b25c6a577->leave($__internal_21514ff1b5361b9670131c29f96c6049543358c294fe6fc988354e8b25c6a577_prof);

    }

    // line 45
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93a5c2abd530b22d06e435a7ccc3b607e4eb8ba36e6e41e2f6033a642650af4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a5c2abd530b22d06e435a7ccc3b607e4eb8ba36e6e41e2f6033a642650af4c->enter($__internal_93a5c2abd530b22d06e435a7ccc3b607e4eb8ba36e6e41e2f6033a642650af4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7bf16b1baf8375e5cf7df92615fe27f9cc8181473e22b4ef30a65261615e5e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf16b1baf8375e5cf7df92615fe27f9cc8181473e22b4ef30a65261615e5e91->enter($__internal_7bf16b1baf8375e5cf7df92615fe27f9cc8181473e22b4ef30a65261615e5e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 46
        echo "            ";
        
        $__internal_7bf16b1baf8375e5cf7df92615fe27f9cc8181473e22b4ef30a65261615e5e91->leave($__internal_7bf16b1baf8375e5cf7df92615fe27f9cc8181473e22b4ef30a65261615e5e91_prof);

        
        $__internal_93a5c2abd530b22d06e435a7ccc3b607e4eb8ba36e6e41e2f6033a642650af4c->leave($__internal_93a5c2abd530b22d06e435a7ccc3b607e4eb8ba36e6e41e2f6033a642650af4c_prof);

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
