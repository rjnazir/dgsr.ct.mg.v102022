<?php

/* AdminBundle:CtCarosserie:add.html.twig */
class __TwigTemplate_f27fad83ba7eb722825aafb05c209ea17780d748cdabc84cdaa0175cee50f70a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtCarosserie:add.html.twig", 1);
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
        $__internal_22f8d58046ca5e2b781ddf169f39d2a9aa9f59563a11e4ead7873ef5171e576d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f8d58046ca5e2b781ddf169f39d2a9aa9f59563a11e4ead7873ef5171e576d->enter($__internal_22f8d58046ca5e2b781ddf169f39d2a9aa9f59563a11e4ead7873ef5171e576d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarosserie:add.html.twig"));

        $__internal_2b426b0db2f3ce49da4e277903c11619d7ccb635ff61a23b707ae3fe660e02da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b426b0db2f3ce49da4e277903c11619d7ccb635ff61a23b707ae3fe660e02da->enter($__internal_2b426b0db2f3ce49da4e277903c11619d7ccb635ff61a23b707ae3fe660e02da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarosserie:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_carosserie"] = true;
        // line 8
        $context["menu_carosserie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22f8d58046ca5e2b781ddf169f39d2a9aa9f59563a11e4ead7873ef5171e576d->leave($__internal_22f8d58046ca5e2b781ddf169f39d2a9aa9f59563a11e4ead7873ef5171e576d_prof);

        
        $__internal_2b426b0db2f3ce49da4e277903c11619d7ccb635ff61a23b707ae3fe660e02da->leave($__internal_2b426b0db2f3ce49da4e277903c11619d7ccb635ff61a23b707ae3fe660e02da_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfad73f9506628e8a7402d82f6d135d2045c18e85bd3c8502c98c7a5bb51e325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfad73f9506628e8a7402d82f6d135d2045c18e85bd3c8502c98c7a5bb51e325->enter($__internal_dfad73f9506628e8a7402d82f6d135d2045c18e85bd3c8502c98c7a5bb51e325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7cbeee860f698ef0a3ccc9c57c7a76f4db1e8a5461b60cfdb46f6e79731fd9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbeee860f698ef0a3ccc9c57c7a76f4db1e8a5461b60cfdb46f6e79731fd9f0->enter($__internal_7cbeee860f698ef0a3ccc9c57c7a76f4db1e8a5461b60cfdb46f6e79731fd9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Carroserie ";
        
        $__internal_7cbeee860f698ef0a3ccc9c57c7a76f4db1e8a5461b60cfdb46f6e79731fd9f0->leave($__internal_7cbeee860f698ef0a3ccc9c57c7a76f4db1e8a5461b60cfdb46f6e79731fd9f0_prof);

        
        $__internal_dfad73f9506628e8a7402d82f6d135d2045c18e85bd3c8502c98c7a5bb51e325->leave($__internal_dfad73f9506628e8a7402d82f6d135d2045c18e85bd3c8502c98c7a5bb51e325_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_09df1e78038d44e7cbfcabaf19226a54aef6f8e4b7f5a4b647d7b407b2bf14ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09df1e78038d44e7cbfcabaf19226a54aef6f8e4b7f5a4b647d7b407b2bf14ec->enter($__internal_09df1e78038d44e7cbfcabaf19226a54aef6f8e4b7f5a4b647d7b407b2bf14ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74d58202ce1f13e84dbe25afd42c7d6866b2cc3870ae7e0a0e8d191cd1100643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d58202ce1f13e84dbe25afd42c7d6866b2cc3870ae7e0a0e8d191cd1100643->enter($__internal_74d58202ce1f13e84dbe25afd42c7d6866b2cc3870ae7e0a0e8d191cd1100643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une carrosserie</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "crsLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_carosserie\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_index");
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
        
        $__internal_74d58202ce1f13e84dbe25afd42c7d6866b2cc3870ae7e0a0e8d191cd1100643->leave($__internal_74d58202ce1f13e84dbe25afd42c7d6866b2cc3870ae7e0a0e8d191cd1100643_prof);

        
        $__internal_09df1e78038d44e7cbfcabaf19226a54aef6f8e4b7f5a4b647d7b407b2bf14ec->leave($__internal_09df1e78038d44e7cbfcabaf19226a54aef6f8e4b7f5a4b647d7b407b2bf14ec_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtCarosserie:add.html.twig";
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

{% block title %}{{ parent() }} Ajout Carroserie {% endblock %}

{% set menu_carosserie        = true %}
{% set menu_carosserie_create = true %}

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
                        <h3 class=\"box-title\">Créer une carrosserie</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.crsLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_carosserie\"/>
                        <a href=\"{{ path('carosserie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtCarosserie:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtCarosserie/add.html.twig");
    }
}
