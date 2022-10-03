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
        $__internal_b684338e85dfb98c3919c2509c1538e898225fd8978c566d837fd6ebc47e9e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b684338e85dfb98c3919c2509c1538e898225fd8978c566d837fd6ebc47e9e03->enter($__internal_b684338e85dfb98c3919c2509c1538e898225fd8978c566d837fd6ebc47e9e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $__internal_8795d6953dce97dcecebedfe97894c546c56f15f4b05bae510b21acc1f16420d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8795d6953dce97dcecebedfe97894c546c56f15f4b05bae510b21acc1f16420d->enter($__internal_8795d6953dce97dcecebedfe97894c546c56f15f4b05bae510b21acc1f16420d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

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
        
        $__internal_b684338e85dfb98c3919c2509c1538e898225fd8978c566d837fd6ebc47e9e03->leave($__internal_b684338e85dfb98c3919c2509c1538e898225fd8978c566d837fd6ebc47e9e03_prof);

        
        $__internal_8795d6953dce97dcecebedfe97894c546c56f15f4b05bae510b21acc1f16420d->leave($__internal_8795d6953dce97dcecebedfe97894c546c56f15f4b05bae510b21acc1f16420d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f5d5ea6a8062bf6c3ef21d6ea2c1a947769363388283e6131395d2bd0c7108a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f5d5ea6a8062bf6c3ef21d6ea2c1a947769363388283e6131395d2bd0c7108a->enter($__internal_0f5d5ea6a8062bf6c3ef21d6ea2c1a947769363388283e6131395d2bd0c7108a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71a21c8817237602e16329e7464f364d701cd24f70c3126c3eeff71cb299e89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a21c8817237602e16329e7464f364d701cd24f70c3126c3eeff71cb299e89b->enter($__internal_71a21c8817237602e16329e7464f364d701cd24f70c3126c3eeff71cb299e89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accès Contrôle technique ";
        
        $__internal_71a21c8817237602e16329e7464f364d701cd24f70c3126c3eeff71cb299e89b->leave($__internal_71a21c8817237602e16329e7464f364d701cd24f70c3126c3eeff71cb299e89b_prof);

        
        $__internal_0f5d5ea6a8062bf6c3ef21d6ea2c1a947769363388283e6131395d2bd0c7108a->leave($__internal_0f5d5ea6a8062bf6c3ef21d6ea2c1a947769363388283e6131395d2bd0c7108a_prof);

    }

    // line 45
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_298d0e57f91348fdcd479cfe39f6bc6dff20adb9ac39576a3bcc2a5f705ff57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_298d0e57f91348fdcd479cfe39f6bc6dff20adb9ac39576a3bcc2a5f705ff57e->enter($__internal_298d0e57f91348fdcd479cfe39f6bc6dff20adb9ac39576a3bcc2a5f705ff57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_10fe627a57de641ac0c6f8318ff7f23e2559a0328f417927d0556b181b4aab1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10fe627a57de641ac0c6f8318ff7f23e2559a0328f417927d0556b181b4aab1d->enter($__internal_10fe627a57de641ac0c6f8318ff7f23e2559a0328f417927d0556b181b4aab1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 46
        echo "            ";
        
        $__internal_10fe627a57de641ac0c6f8318ff7f23e2559a0328f417927d0556b181b4aab1d->leave($__internal_10fe627a57de641ac0c6f8318ff7f23e2559a0328f417927d0556b181b4aab1d_prof);

        
        $__internal_298d0e57f91348fdcd479cfe39f6bc6dff20adb9ac39576a3bcc2a5f705ff57e->leave($__internal_298d0e57f91348fdcd479cfe39f6bc6dff20adb9ac39576a3bcc2a5f705ff57e_prof);

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
