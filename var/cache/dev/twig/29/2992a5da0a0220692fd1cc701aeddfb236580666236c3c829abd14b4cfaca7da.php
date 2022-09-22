<?php

/* AdminBundle:CtRole:add.html.twig */
class __TwigTemplate_74881c3deff01622a745954f4bc559455136bdbe9dbb1ebe2bd213fa88bd2176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtRole:add.html.twig", 1);
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
        $__internal_c31c5db991ab66c148c69e863bcec766a530523bdbeaa900d37cc82b51bcb6d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c31c5db991ab66c148c69e863bcec766a530523bdbeaa900d37cc82b51bcb6d3->enter($__internal_c31c5db991ab66c148c69e863bcec766a530523bdbeaa900d37cc82b51bcb6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtRole:add.html.twig"));

        $__internal_06cc0d1659af5d98e0ceb73e8762c199cf96fad51e0c434f56d0f01ab6655d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06cc0d1659af5d98e0ceb73e8762c199cf96fad51e0c434f56d0f01ab6655d62->enter($__internal_06cc0d1659af5d98e0ceb73e8762c199cf96fad51e0c434f56d0f01ab6655d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtRole:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_role"] = true;
        // line 8
        $context["menu_role_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c31c5db991ab66c148c69e863bcec766a530523bdbeaa900d37cc82b51bcb6d3->leave($__internal_c31c5db991ab66c148c69e863bcec766a530523bdbeaa900d37cc82b51bcb6d3_prof);

        
        $__internal_06cc0d1659af5d98e0ceb73e8762c199cf96fad51e0c434f56d0f01ab6655d62->leave($__internal_06cc0d1659af5d98e0ceb73e8762c199cf96fad51e0c434f56d0f01ab6655d62_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b21a48db5ff9a84fbe67ce371aa86ccad99a607bade686210ce58d0f8082a8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21a48db5ff9a84fbe67ce371aa86ccad99a607bade686210ce58d0f8082a8e4->enter($__internal_b21a48db5ff9a84fbe67ce371aa86ccad99a607bade686210ce58d0f8082a8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7c0db84854a2c696a7365e34ad2928cadee171fe7d9f9f023cd5fdd772d82065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0db84854a2c696a7365e34ad2928cadee171fe7d9f9f023cd5fdd772d82065->enter($__internal_7c0db84854a2c696a7365e34ad2928cadee171fe7d9f9f023cd5fdd772d82065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Rôle ";
        
        $__internal_7c0db84854a2c696a7365e34ad2928cadee171fe7d9f9f023cd5fdd772d82065->leave($__internal_7c0db84854a2c696a7365e34ad2928cadee171fe7d9f9f023cd5fdd772d82065_prof);

        
        $__internal_b21a48db5ff9a84fbe67ce371aa86ccad99a607bade686210ce58d0f8082a8e4->leave($__internal_b21a48db5ff9a84fbe67ce371aa86ccad99a607bade686210ce58d0f8082a8e4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0352cc48de4637796449a56205e53033c8d2975c512cad6a08d392b157efa04a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0352cc48de4637796449a56205e53033c8d2975c512cad6a08d392b157efa04a->enter($__internal_0352cc48de4637796449a56205e53033c8d2975c512cad6a08d392b157efa04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1e6b4dec2c7c85748d834259f6a45256c049ab9cbb218f7f9d48aac5302b59d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e6b4dec2c7c85748d834259f6a45256c049ab9cbb218f7f9d48aac5302b59d->enter($__internal_d1e6b4dec2c7c85748d834259f6a45256c049ab9cbb218f7f9d48aac5302b59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un rôle</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "roleName", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_role\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_index");
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
        
        $__internal_d1e6b4dec2c7c85748d834259f6a45256c049ab9cbb218f7f9d48aac5302b59d->leave($__internal_d1e6b4dec2c7c85748d834259f6a45256c049ab9cbb218f7f9d48aac5302b59d_prof);

        
        $__internal_0352cc48de4637796449a56205e53033c8d2975c512cad6a08d392b157efa04a->leave($__internal_0352cc48de4637796449a56205e53033c8d2975c512cad6a08d392b157efa04a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtRole:add.html.twig";
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

{% block title %}{{ parent() }} Ajout Rôle {% endblock %}

{% set menu_role        = true %}
{% set menu_role_create = true %}

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
                        <h3 class=\"box-title\">Créer un rôle</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.roleName) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_role\"/>
                        <a href=\"{{ path('role_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtRole:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtRole/add.html.twig");
    }
}
