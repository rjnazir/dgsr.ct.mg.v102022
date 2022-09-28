<?php

/* @Admin/CtCarosserie/add.html.twig */
class __TwigTemplate_11c944766529b8f72d23425cad811fb8eb6797e0c77e438abfb00c3f4d1d7e88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtCarosserie/add.html.twig", 1);
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
        $__internal_418a0dcf6ac8f53f8974e0132447b834d1078e1ded7fd5eee556e2c0aa9608c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_418a0dcf6ac8f53f8974e0132447b834d1078e1ded7fd5eee556e2c0aa9608c7->enter($__internal_418a0dcf6ac8f53f8974e0132447b834d1078e1ded7fd5eee556e2c0aa9608c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCarosserie/add.html.twig"));

        $__internal_d6566b83d316ba2f6f894da00fdd5d807e2b863e59f1f200d489cc40fac9a7d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6566b83d316ba2f6f894da00fdd5d807e2b863e59f1f200d489cc40fac9a7d6->enter($__internal_d6566b83d316ba2f6f894da00fdd5d807e2b863e59f1f200d489cc40fac9a7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCarosserie/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_carosserie"] = true;
        // line 8
        $context["menu_carosserie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_418a0dcf6ac8f53f8974e0132447b834d1078e1ded7fd5eee556e2c0aa9608c7->leave($__internal_418a0dcf6ac8f53f8974e0132447b834d1078e1ded7fd5eee556e2c0aa9608c7_prof);

        
        $__internal_d6566b83d316ba2f6f894da00fdd5d807e2b863e59f1f200d489cc40fac9a7d6->leave($__internal_d6566b83d316ba2f6f894da00fdd5d807e2b863e59f1f200d489cc40fac9a7d6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdbb2202551bad0ec3bf168a2672fa740369198467851ab5050948f34786a041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdbb2202551bad0ec3bf168a2672fa740369198467851ab5050948f34786a041->enter($__internal_fdbb2202551bad0ec3bf168a2672fa740369198467851ab5050948f34786a041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a17cad4bb6b2623ba3ccd8999f92b9ca7ea696048affc1e2bb18aebc134aa0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17cad4bb6b2623ba3ccd8999f92b9ca7ea696048affc1e2bb18aebc134aa0eb->enter($__internal_a17cad4bb6b2623ba3ccd8999f92b9ca7ea696048affc1e2bb18aebc134aa0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Carroserie ";
        
        $__internal_a17cad4bb6b2623ba3ccd8999f92b9ca7ea696048affc1e2bb18aebc134aa0eb->leave($__internal_a17cad4bb6b2623ba3ccd8999f92b9ca7ea696048affc1e2bb18aebc134aa0eb_prof);

        
        $__internal_fdbb2202551bad0ec3bf168a2672fa740369198467851ab5050948f34786a041->leave($__internal_fdbb2202551bad0ec3bf168a2672fa740369198467851ab5050948f34786a041_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a27c2a9a7be15ad8986b388d4ef2f77b42781c087ebf0f7bbd27edd513c5b81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a27c2a9a7be15ad8986b388d4ef2f77b42781c087ebf0f7bbd27edd513c5b81->enter($__internal_4a27c2a9a7be15ad8986b388d4ef2f77b42781c087ebf0f7bbd27edd513c5b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9ccba4ca67fff0dd4ce7f9903a9463a48c65739066ce5a6c775f5cef5f4c46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ccba4ca67fff0dd4ce7f9903a9463a48c65739066ce5a6c775f5cef5f4c46d->enter($__internal_e9ccba4ca67fff0dd4ce7f9903a9463a48c65739066ce5a6c775f5cef5f4c46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e9ccba4ca67fff0dd4ce7f9903a9463a48c65739066ce5a6c775f5cef5f4c46d->leave($__internal_e9ccba4ca67fff0dd4ce7f9903a9463a48c65739066ce5a6c775f5cef5f4c46d_prof);

        
        $__internal_4a27c2a9a7be15ad8986b388d4ef2f77b42781c087ebf0f7bbd27edd513c5b81->leave($__internal_4a27c2a9a7be15ad8986b388d4ef2f77b42781c087ebf0f7bbd27edd513c5b81_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtCarosserie/add.html.twig";
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
{% endblock %}", "@Admin/CtCarosserie/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtCarosserie\\add.html.twig");
    }
}
