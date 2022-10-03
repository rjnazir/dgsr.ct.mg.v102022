<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_72f03c8e0ee8dfecd766661e458aaa40872d8fb9fc518de38c4a9fc5fde2cb37 extends Twig_Template
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
        $__internal_c2cbd791995be05b8ade7095e5411cda4c3625cd8bd7b4618b01c5eb3bac8900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2cbd791995be05b8ade7095e5411cda4c3625cd8bd7b4618b01c5eb3bac8900->enter($__internal_c2cbd791995be05b8ade7095e5411cda4c3625cd8bd7b4618b01c5eb3bac8900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $__internal_d996471a500c3e20c2bbccbc70df1d13ed3d749d4b3d515c0c547326c9e69e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d996471a500c3e20c2bbccbc70df1d13ed3d749d4b3d515c0c547326c9e69e55->enter($__internal_d996471a500c3e20c2bbccbc70df1d13ed3d749d4b3d515c0c547326c9e69e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

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
        
        $__internal_c2cbd791995be05b8ade7095e5411cda4c3625cd8bd7b4618b01c5eb3bac8900->leave($__internal_c2cbd791995be05b8ade7095e5411cda4c3625cd8bd7b4618b01c5eb3bac8900_prof);

        
        $__internal_d996471a500c3e20c2bbccbc70df1d13ed3d749d4b3d515c0c547326c9e69e55->leave($__internal_d996471a500c3e20c2bbccbc70df1d13ed3d749d4b3d515c0c547326c9e69e55_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78ab3a46102d10cc2c2d14470da0237e4056ac08a48b015b10314b74b76cc164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ab3a46102d10cc2c2d14470da0237e4056ac08a48b015b10314b74b76cc164->enter($__internal_78ab3a46102d10cc2c2d14470da0237e4056ac08a48b015b10314b74b76cc164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_574af9dc49d5a50308eb2c3ba1f3f2fc39cb2e847f91c14ce60623f15032b219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574af9dc49d5a50308eb2c3ba1f3f2fc39cb2e847f91c14ce60623f15032b219->enter($__internal_574af9dc49d5a50308eb2c3ba1f3f2fc39cb2e847f91c14ce60623f15032b219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accès Contrôle technique ";
        
        $__internal_574af9dc49d5a50308eb2c3ba1f3f2fc39cb2e847f91c14ce60623f15032b219->leave($__internal_574af9dc49d5a50308eb2c3ba1f3f2fc39cb2e847f91c14ce60623f15032b219_prof);

        
        $__internal_78ab3a46102d10cc2c2d14470da0237e4056ac08a48b015b10314b74b76cc164->leave($__internal_78ab3a46102d10cc2c2d14470da0237e4056ac08a48b015b10314b74b76cc164_prof);

    }

    // line 45
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_898e13d253d4b376cc5c61c819f7c6c6fe6ed2d5955f45c27a9dc971e833a76f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_898e13d253d4b376cc5c61c819f7c6c6fe6ed2d5955f45c27a9dc971e833a76f->enter($__internal_898e13d253d4b376cc5c61c819f7c6c6fe6ed2d5955f45c27a9dc971e833a76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bc3acc59d217018811de73bee8eea053b89a221a6cb4ab8ff70bb802b363f4c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3acc59d217018811de73bee8eea053b89a221a6cb4ab8ff70bb802b363f4c7->enter($__internal_bc3acc59d217018811de73bee8eea053b89a221a6cb4ab8ff70bb802b363f4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 46
        echo "            ";
        
        $__internal_bc3acc59d217018811de73bee8eea053b89a221a6cb4ab8ff70bb802b363f4c7->leave($__internal_bc3acc59d217018811de73bee8eea053b89a221a6cb4ab8ff70bb802b363f4c7_prof);

        
        $__internal_898e13d253d4b376cc5c61c819f7c6c6fe6ed2d5955f45c27a9dc971e833a76f->leave($__internal_898e13d253d4b376cc5c61c819f7c6c6fe6ed2d5955f45c27a9dc971e833a76f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
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

", "UserBundle::layout.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle/Resources/views/layout.html.twig");
    }
}
