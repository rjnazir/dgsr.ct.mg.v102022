<?php

/* AdminBundle:CtVisiteExtraTarif:edit.html.twig */
class __TwigTemplate_b15ec785c26c167fe04bcbfd6ac97153a4d7cddab399f4a1254a181c9abd9cb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtVisiteExtraTarif:edit.html.twig", 1);
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
        $__internal_ae73eb255ac66c5952f32f2b3ae21f78e0936a9ca399e20f922b1d15fc79e807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae73eb255ac66c5952f32f2b3ae21f78e0936a9ca399e20f922b1d15fc79e807->enter($__internal_ae73eb255ac66c5952f32f2b3ae21f78e0936a9ca399e20f922b1d15fc79e807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisiteExtraTarif:edit.html.twig"));

        $__internal_e86a75dd14b30a9f50d240de29f2098d2b4951934c1ddb785690b18ba7c62366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86a75dd14b30a9f50d240de29f2098d2b4951934c1ddb785690b18ba7c62366->enter($__internal_e86a75dd14b30a9f50d240de29f2098d2b4951934c1ddb785690b18ba7c62366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisiteExtraTarif:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite_extra"] = true;
        // line 8
        $context["menu_visite_extra_tarif"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae73eb255ac66c5952f32f2b3ae21f78e0936a9ca399e20f922b1d15fc79e807->leave($__internal_ae73eb255ac66c5952f32f2b3ae21f78e0936a9ca399e20f922b1d15fc79e807_prof);

        
        $__internal_e86a75dd14b30a9f50d240de29f2098d2b4951934c1ddb785690b18ba7c62366->leave($__internal_e86a75dd14b30a9f50d240de29f2098d2b4951934c1ddb785690b18ba7c62366_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8b4c72b04d460ea8333d6d984ce2e2761dbbcf2aa7af7216b5232f71acdb2bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b4c72b04d460ea8333d6d984ce2e2761dbbcf2aa7af7216b5232f71acdb2bf->enter($__internal_a8b4c72b04d460ea8333d6d984ce2e2761dbbcf2aa7af7216b5232f71acdb2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ebd35d18dcc3ee09e0463524c6ce36fb7a8180b834daafce90d9ba3009290578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd35d18dcc3ee09e0463524c6ce36fb7a8180b834daafce90d9ba3009290578->enter($__internal_ebd35d18dcc3ee09e0463524c6ce36fb7a8180b834daafce90d9ba3009290578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification tarif de visite extra ";
        
        $__internal_ebd35d18dcc3ee09e0463524c6ce36fb7a8180b834daafce90d9ba3009290578->leave($__internal_ebd35d18dcc3ee09e0463524c6ce36fb7a8180b834daafce90d9ba3009290578_prof);

        
        $__internal_a8b4c72b04d460ea8333d6d984ce2e2761dbbcf2aa7af7216b5232f71acdb2bf->leave($__internal_a8b4c72b04d460ea8333d6d984ce2e2761dbbcf2aa7af7216b5232f71acdb2bf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffb7e229603bd042b567eabe9a937fa036f98ef79990e7b5276ccaa439fb08db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb7e229603bd042b567eabe9a937fa036f98ef79990e7b5276ccaa439fb08db->enter($__internal_ffb7e229603bd042b567eabe9a937fa036f98ef79990e7b5276ccaa439fb08db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f8f5900314d9fcce155522a6685bef791791946777cb15dccd261985f60953f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8f5900314d9fcce155522a6685bef791791946777cb15dccd261985f60953f->enter($__internal_0f8f5900314d9fcce155522a6685bef791791946777cb15dccd261985f60953f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un tarif visite extra</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVisiteExtra", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "vetPrix", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite_extra\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_tarif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_0f8f5900314d9fcce155522a6685bef791791946777cb15dccd261985f60953f->leave($__internal_0f8f5900314d9fcce155522a6685bef791791946777cb15dccd261985f60953f_prof);

        
        $__internal_ffb7e229603bd042b567eabe9a937fa036f98ef79990e7b5276ccaa439fb08db->leave($__internal_ffb7e229603bd042b567eabe9a937fa036f98ef79990e7b5276ccaa439fb08db_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtVisiteExtraTarif:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification tarif de visite extra {% endblock %}

{% set menu_visite_extra = true %}
{% set menu_visite_extra_tarif = true %}

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
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un tarif visite extra</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctVisiteExtra) }}
                        {{ form_row(edit_form.vetPrix) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite_extra\"/>
                        <a href=\"{{ path('visite_extra_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtVisiteExtraTarif:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtVisiteExtraTarif/edit.html.twig");
    }
}
