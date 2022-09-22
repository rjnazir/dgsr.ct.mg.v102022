<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_932c0a603cfe2e2481b97642c29f2756b6e8c4aa120e6fb3a1b9bfc63cc1f0b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_541857cae6f9f6d7ffcc60a3428df297fb572a3a43ed5668cad3a93bf3dd84fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541857cae6f9f6d7ffcc60a3428df297fb572a3a43ed5668cad3a93bf3dd84fa->enter($__internal_541857cae6f9f6d7ffcc60a3428df297fb572a3a43ed5668cad3a93bf3dd84fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_1e4217aad6ab89a9a49fc8ac95c9161cf0bf6c63312cc3aeaa5d7b3482eec639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4217aad6ab89a9a49fc8ac95c9161cf0bf6c63312cc3aeaa5d7b3482eec639->enter($__internal_1e4217aad6ab89a9a49fc8ac95c9161cf0bf6c63312cc3aeaa5d7b3482eec639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 14
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 16
        echo "        </div>

        ";
        // line 18
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 19
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 20
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 21
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 22
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
        }
        // line 27
        echo "
        <div>
            ";
        // line 29
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 31
        echo "        </div>
    </body>
</html>
";
        
        $__internal_541857cae6f9f6d7ffcc60a3428df297fb572a3a43ed5668cad3a93bf3dd84fa->leave($__internal_541857cae6f9f6d7ffcc60a3428df297fb572a3a43ed5668cad3a93bf3dd84fa_prof);

        
        $__internal_1e4217aad6ab89a9a49fc8ac95c9161cf0bf6c63312cc3aeaa5d7b3482eec639->leave($__internal_1e4217aad6ab89a9a49fc8ac95c9161cf0bf6c63312cc3aeaa5d7b3482eec639_prof);

    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0446fb172096059eb11aef623ed7801c74336091ca30750f9551bf847a8f7457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0446fb172096059eb11aef623ed7801c74336091ca30750f9551bf847a8f7457->enter($__internal_0446fb172096059eb11aef623ed7801c74336091ca30750f9551bf847a8f7457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_69a5a87891064a81dc23201cf17e03b5dfe66cf5a402aa126c3940b8a417e02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a5a87891064a81dc23201cf17e03b5dfe66cf5a402aa126c3940b8a417e02e->enter($__internal_69a5a87891064a81dc23201cf17e03b5dfe66cf5a402aa126c3940b8a417e02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 30
        echo "            ";
        
        $__internal_69a5a87891064a81dc23201cf17e03b5dfe66cf5a402aa126c3940b8a417e02e->leave($__internal_69a5a87891064a81dc23201cf17e03b5dfe66cf5a402aa126c3940b8a417e02e_prof);

        
        $__internal_0446fb172096059eb11aef623ed7801c74336091ca30750f9551bf847a8f7457->leave($__internal_0446fb172096059eb11aef623ed7801c74336091ca30750f9551bf847a8f7457_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 30,  118 => 29,  105 => 31,  103 => 29,  99 => 27,  96 => 26,  90 => 25,  81 => 22,  76 => 21,  71 => 20,  66 => 19,  64 => 18,  60 => 16,  52 => 14,  46 => 11,  42 => 10,  37 => 9,  35 => 8,  26 => 1,);
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
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
", "FOSUserBundle::layout.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/layout.html.twig");
    }
}
