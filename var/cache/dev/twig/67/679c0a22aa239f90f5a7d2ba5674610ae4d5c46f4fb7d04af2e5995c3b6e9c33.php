<?php

/* @Admin/CtTypeUsage/add.html.twig */
class __TwigTemplate_e4ae15a02616b6a6d3f2f59b2b262ee6fb1d3c40f209786088f04b7087940d75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeUsage/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe5c59871f74425fe477f27170a848a322710c1a383d77786335adb4312304af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5c59871f74425fe477f27170a848a322710c1a383d77786335adb4312304af->enter($__internal_fe5c59871f74425fe477f27170a848a322710c1a383d77786335adb4312304af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeUsage/add.html.twig"));

        $__internal_3b3b90e2525f8fc6fc08f5f62e5b1ad0050b06e2f6c1eadfc92654f2ed7d71c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3b90e2525f8fc6fc08f5f62e5b1ad0050b06e2f6c1eadfc92654f2ed7d71c3->enter($__internal_3b3b90e2525f8fc6fc08f5f62e5b1ad0050b06e2f6c1eadfc92654f2ed7d71c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeUsage/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_type_usage"] = true;
        // line 8
        $context["menu_type_usage_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe5c59871f74425fe477f27170a848a322710c1a383d77786335adb4312304af->leave($__internal_fe5c59871f74425fe477f27170a848a322710c1a383d77786335adb4312304af_prof);

        
        $__internal_3b3b90e2525f8fc6fc08f5f62e5b1ad0050b06e2f6c1eadfc92654f2ed7d71c3->leave($__internal_3b3b90e2525f8fc6fc08f5f62e5b1ad0050b06e2f6c1eadfc92654f2ed7d71c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d17039246f8ee1961f68162138a205bc3b1002c94618a0b212cb5c5230ba3a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17039246f8ee1961f68162138a205bc3b1002c94618a0b212cb5c5230ba3a78->enter($__internal_d17039246f8ee1961f68162138a205bc3b1002c94618a0b212cb5c5230ba3a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8822ac299da9411fd913f238bbfa9c0097d5479f5d5bd8cc7b47b8997558c04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8822ac299da9411fd913f238bbfa9c0097d5479f5d5bd8cc7b47b8997558c04e->enter($__internal_8822ac299da9411fd913f238bbfa9c0097d5479f5d5bd8cc7b47b8997558c04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout type d'usage ";
        
        $__internal_8822ac299da9411fd913f238bbfa9c0097d5479f5d5bd8cc7b47b8997558c04e->leave($__internal_8822ac299da9411fd913f238bbfa9c0097d5479f5d5bd8cc7b47b8997558c04e_prof);

        
        $__internal_d17039246f8ee1961f68162138a205bc3b1002c94618a0b212cb5c5230ba3a78->leave($__internal_d17039246f8ee1961f68162138a205bc3b1002c94618a0b212cb5c5230ba3a78_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd6bbf5b199ed8e1545c728d357f2e14988d1c7908b57ac3ab1d90aabeb85412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6bbf5b199ed8e1545c728d357f2e14988d1c7908b57ac3ab1d90aabeb85412->enter($__internal_bd6bbf5b199ed8e1545c728d357f2e14988d1c7908b57ac3ab1d90aabeb85412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e170f37e00046f9fd3db9c90686b1dded966bb1358c59d4e0f13c81571c3c7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e170f37e00046f9fd3db9c90686b1dded966bb1358c59d4e0f13c81571c3c7eb->enter($__internal_e170f37e00046f9fd3db9c90686b1dded966bb1358c59d4e0f13c81571c3c7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un type d'usage</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpuLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_usage\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_usage_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_e170f37e00046f9fd3db9c90686b1dded966bb1358c59d4e0f13c81571c3c7eb->leave($__internal_e170f37e00046f9fd3db9c90686b1dded966bb1358c59d4e0f13c81571c3c7eb_prof);

        
        $__internal_bd6bbf5b199ed8e1545c728d357f2e14988d1c7908b57ac3ab1d90aabeb85412->leave($__internal_bd6bbf5b199ed8e1545c728d357f2e14988d1c7908b57ac3ab1d90aabeb85412_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeUsage/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout type d'usage {% endblock %}

{% set menu_type_usage        = true %}
{% set menu_type_usage_create = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un type d'usage</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.tpuLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_usage\"/>
                        <a href=\"{{ path('type_usage_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeUsage/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeUsage\\add.html.twig");
    }
}
