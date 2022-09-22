<?php

/* AdminBundle:CtAnomalie:edit.html.twig */
class __TwigTemplate_d429161cd2ddc8aae9e4edf6226bbbc503fabb94cce29bdfe3beef7503ac1199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtAnomalie:edit.html.twig", 1);
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
        $__internal_a5663f02b1a337032166c3f538d04326f2a23d46cfcd04db7d7304e929849ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5663f02b1a337032166c3f538d04326f2a23d46cfcd04db7d7304e929849ecc->enter($__internal_a5663f02b1a337032166c3f538d04326f2a23d46cfcd04db7d7304e929849ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtAnomalie:edit.html.twig"));

        $__internal_cb0adbbf6225d12aafd5cf3452a373d0ebbaa3fa042882fd5989d82d4c0d4c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0adbbf6225d12aafd5cf3452a373d0ebbaa3fa042882fd5989d82d4c0d4c9b->enter($__internal_cb0adbbf6225d12aafd5cf3452a373d0ebbaa3fa042882fd5989d82d4c0d4c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtAnomalie:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_anomalie"] = true;
        // line 8
        $context["menu_anomalie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5663f02b1a337032166c3f538d04326f2a23d46cfcd04db7d7304e929849ecc->leave($__internal_a5663f02b1a337032166c3f538d04326f2a23d46cfcd04db7d7304e929849ecc_prof);

        
        $__internal_cb0adbbf6225d12aafd5cf3452a373d0ebbaa3fa042882fd5989d82d4c0d4c9b->leave($__internal_cb0adbbf6225d12aafd5cf3452a373d0ebbaa3fa042882fd5989d82d4c0d4c9b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8bcfeaf59ce1eb1d811cb64aef8c930f4470527af8a61f19a4a902018aa7fd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8bcfeaf59ce1eb1d811cb64aef8c930f4470527af8a61f19a4a902018aa7fd4->enter($__internal_d8bcfeaf59ce1eb1d811cb64aef8c930f4470527af8a61f19a4a902018aa7fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0cf13e847ad5cf09277abc6e91c6684d1797f00e0556e314709a5f6c554c9333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf13e847ad5cf09277abc6e91c6684d1797f00e0556e314709a5f6c554c9333->enter($__internal_0cf13e847ad5cf09277abc6e91c6684d1797f00e0556e314709a5f6c554c9333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Anomalie ";
        
        $__internal_0cf13e847ad5cf09277abc6e91c6684d1797f00e0556e314709a5f6c554c9333->leave($__internal_0cf13e847ad5cf09277abc6e91c6684d1797f00e0556e314709a5f6c554c9333_prof);

        
        $__internal_d8bcfeaf59ce1eb1d811cb64aef8c930f4470527af8a61f19a4a902018aa7fd4->leave($__internal_d8bcfeaf59ce1eb1d811cb64aef8c930f4470527af8a61f19a4a902018aa7fd4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_54719545e19bedd3e5bb12c03e67680aa9de4c11cbc80c04f20752a4d187ea06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54719545e19bedd3e5bb12c03e67680aa9de4c11cbc80c04f20752a4d187ea06->enter($__internal_54719545e19bedd3e5bb12c03e67680aa9de4c11cbc80c04f20752a4d187ea06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b4f174860f9474e3d1515db6e2ee35800ee002e9a55027a5720bfcee9a91754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4f174860f9474e3d1515db6e2ee35800ee002e9a55027a5720bfcee9a91754->enter($__internal_4b4f174860f9474e3d1515db6e2ee35800ee002e9a55027a5720bfcee9a91754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctAnomalieType", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "anmlLibelle", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "anmlCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_anomalie\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anomalie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_4b4f174860f9474e3d1515db6e2ee35800ee002e9a55027a5720bfcee9a91754->leave($__internal_4b4f174860f9474e3d1515db6e2ee35800ee002e9a55027a5720bfcee9a91754_prof);

        
        $__internal_54719545e19bedd3e5bb12c03e67680aa9de4c11cbc80c04f20752a4d187ea06->leave($__internal_54719545e19bedd3e5bb12c03e67680aa9de4c11cbc80c04f20752a4d187ea06_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtAnomalie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  141 => 38,  133 => 33,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Anomalie {% endblock %}

{% set menu_anomalie        = true %}
{% set menu_anomalie_create = true %}

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
                        <h3 class=\"box-title\">Editer une anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctAnomalieType) }}
                        {{ form_row(edit_form.anmlLibelle) }}
                        {{ form_row(edit_form.anmlCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_anomalie\"/>
                        <a href=\"{{ path('anomalie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtAnomalie:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtAnomalie/edit.html.twig");
    }
}
