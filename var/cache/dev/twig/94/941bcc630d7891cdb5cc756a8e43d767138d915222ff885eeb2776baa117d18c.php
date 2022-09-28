<?php

/* @Admin/CtTypeDroitPtac/add.html.twig */
class __TwigTemplate_24f532acb1090a66435573e71a7166f9b2236f9f4299833b62dde275a1df0540 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeDroitPtac/add.html.twig", 1);
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
        $__internal_938a226c81174f2110310563a4e2f24926aa2b086caf2c0152b1199e6f17d48e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_938a226c81174f2110310563a4e2f24926aa2b086caf2c0152b1199e6f17d48e->enter($__internal_938a226c81174f2110310563a4e2f24926aa2b086caf2c0152b1199e6f17d48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeDroitPtac/add.html.twig"));

        $__internal_8e2e5386586ae548220f64250557f1d1921c7f74a70d7c0c5d0a841055da4439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2e5386586ae548220f64250557f1d1921c7f74a70d7c0c5d0a841055da4439->enter($__internal_8e2e5386586ae548220f64250557f1d1921c7f74a70d7c0c5d0a841055da4439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeDroitPtac/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_type_droit_ptac"] = true;
        // line 8
        $context["menu_type_droit_ptac_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_938a226c81174f2110310563a4e2f24926aa2b086caf2c0152b1199e6f17d48e->leave($__internal_938a226c81174f2110310563a4e2f24926aa2b086caf2c0152b1199e6f17d48e_prof);

        
        $__internal_8e2e5386586ae548220f64250557f1d1921c7f74a70d7c0c5d0a841055da4439->leave($__internal_8e2e5386586ae548220f64250557f1d1921c7f74a70d7c0c5d0a841055da4439_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30634deaf057735f7fe7c7abdc067b5aea8fe371fec1454c7b50fd8ea1e3ee82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30634deaf057735f7fe7c7abdc067b5aea8fe371fec1454c7b50fd8ea1e3ee82->enter($__internal_30634deaf057735f7fe7c7abdc067b5aea8fe371fec1454c7b50fd8ea1e3ee82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_710ba67ffe8204e47a6392f24df3c1541ce5799ae1272ba28710c73f08bae971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710ba67ffe8204e47a6392f24df3c1541ce5799ae1272ba28710c73f08bae971->enter($__internal_710ba67ffe8204e47a6392f24df3c1541ce5799ae1272ba28710c73f08bae971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type de droit_ptac ";
        
        $__internal_710ba67ffe8204e47a6392f24df3c1541ce5799ae1272ba28710c73f08bae971->leave($__internal_710ba67ffe8204e47a6392f24df3c1541ce5799ae1272ba28710c73f08bae971_prof);

        
        $__internal_30634deaf057735f7fe7c7abdc067b5aea8fe371fec1454c7b50fd8ea1e3ee82->leave($__internal_30634deaf057735f7fe7c7abdc067b5aea8fe371fec1454c7b50fd8ea1e3ee82_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_75ec6c596790b46174123baadbfc8df20b6f15e5d11fe023aca301878f94ae55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ec6c596790b46174123baadbfc8df20b6f15e5d11fe023aca301878f94ae55->enter($__internal_75ec6c596790b46174123baadbfc8df20b6f15e5d11fe023aca301878f94ae55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d964eba27e223c5946309789fa8dcbb91998459706c8248af92b635bb4b17744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d964eba27e223c5946309789fa8dcbb91998459706c8248af92b635bb4b17744->enter($__internal_d964eba27e223c5946309789fa8dcbb91998459706c8248af92b635bb4b17744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un type de droit PTAC</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpDpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_droit_ptac\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_droit_ptac_index");
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
        
        $__internal_d964eba27e223c5946309789fa8dcbb91998459706c8248af92b635bb4b17744->leave($__internal_d964eba27e223c5946309789fa8dcbb91998459706c8248af92b635bb4b17744_prof);

        
        $__internal_75ec6c596790b46174123baadbfc8df20b6f15e5d11fe023aca301878f94ae55->leave($__internal_75ec6c596790b46174123baadbfc8df20b6f15e5d11fe023aca301878f94ae55_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeDroitPtac/add.html.twig";
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

{% block title %}{{ parent() }} Ajout Type de droit_ptac {% endblock %}

{% set menu_type_droit_ptac        = true %}
{% set menu_type_droit_ptac_create = true %}

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
                        <h3 class=\"box-title\">Créer un type de droit PTAC</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.tpDpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_droit_ptac\"/>
                        <a href=\"{{ path('type_droit_ptac_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeDroitPtac/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeDroitPtac\\add.html.twig");
    }
}
