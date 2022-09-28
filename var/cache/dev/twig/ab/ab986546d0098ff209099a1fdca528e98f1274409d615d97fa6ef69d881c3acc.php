<?php

/* @Admin/CtMarque/edit.html.twig */
class __TwigTemplate_f3b8fae6f2caa12d37747f6e80a52bf23b2318c324fdd0b4f3701f3639c9605a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtMarque/edit.html.twig", 1);
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
        $__internal_848fea2c90ed17fbd50f6ccfec9ad91301f0c863edcab25faab15d83dbdc5a03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848fea2c90ed17fbd50f6ccfec9ad91301f0c863edcab25faab15d83dbdc5a03->enter($__internal_848fea2c90ed17fbd50f6ccfec9ad91301f0c863edcab25faab15d83dbdc5a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMarque/edit.html.twig"));

        $__internal_e9dd5dbe31bb0440644a28e0e3e88f4ce9f26afe5a8ca2366d0f83c2042c3c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9dd5dbe31bb0440644a28e0e3e88f4ce9f26afe5a8ca2366d0f83c2042c3c4e->enter($__internal_e9dd5dbe31bb0440644a28e0e3e88f4ce9f26afe5a8ca2366d0f83c2042c3c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMarque/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_marque"] = true;
        // line 8
        $context["menu_marque_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_848fea2c90ed17fbd50f6ccfec9ad91301f0c863edcab25faab15d83dbdc5a03->leave($__internal_848fea2c90ed17fbd50f6ccfec9ad91301f0c863edcab25faab15d83dbdc5a03_prof);

        
        $__internal_e9dd5dbe31bb0440644a28e0e3e88f4ce9f26afe5a8ca2366d0f83c2042c3c4e->leave($__internal_e9dd5dbe31bb0440644a28e0e3e88f4ce9f26afe5a8ca2366d0f83c2042c3c4e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc24239208acb47b6bd71b540ffe9e611f34043a816a51d7a1ff4f780fbe8e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc24239208acb47b6bd71b540ffe9e611f34043a816a51d7a1ff4f780fbe8e2f->enter($__internal_dc24239208acb47b6bd71b540ffe9e611f34043a816a51d7a1ff4f780fbe8e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e95ccd5236341dbe79f8c43905ac82b443c0634a36648b0bc482db122b359a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95ccd5236341dbe79f8c43905ac82b443c0634a36648b0bc482db122b359a5e->enter($__internal_e95ccd5236341dbe79f8c43905ac82b443c0634a36648b0bc482db122b359a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Marque ";
        
        $__internal_e95ccd5236341dbe79f8c43905ac82b443c0634a36648b0bc482db122b359a5e->leave($__internal_e95ccd5236341dbe79f8c43905ac82b443c0634a36648b0bc482db122b359a5e_prof);

        
        $__internal_dc24239208acb47b6bd71b540ffe9e611f34043a816a51d7a1ff4f780fbe8e2f->leave($__internal_dc24239208acb47b6bd71b540ffe9e611f34043a816a51d7a1ff4f780fbe8e2f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0d1e13e4bb90a0a43a84928cf6e46c66eb823e971a2c966ad8f17ac1e56ca4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0d1e13e4bb90a0a43a84928cf6e46c66eb823e971a2c966ad8f17ac1e56ca4e->enter($__internal_b0d1e13e4bb90a0a43a84928cf6e46c66eb823e971a2c966ad8f17ac1e56ca4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f40fe146769a761a07f9f7bf882a8d959e850ab965063eddfd3418728bc250ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40fe146769a761a07f9f7bf882a8d959e850ab965063eddfd3418728bc250ef->enter($__internal_f40fe146769a761a07f9f7bf882a8d959e850ab965063eddfd3418728bc250ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mrqLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_marque\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_f40fe146769a761a07f9f7bf882a8d959e850ab965063eddfd3418728bc250ef->leave($__internal_f40fe146769a761a07f9f7bf882a8d959e850ab965063eddfd3418728bc250ef_prof);

        
        $__internal_b0d1e13e4bb90a0a43a84928cf6e46c66eb823e971a2c966ad8f17ac1e56ca4e->leave($__internal_b0d1e13e4bb90a0a43a84928cf6e46c66eb823e971a2c966ad8f17ac1e56ca4e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtMarque/edit.html.twig";
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Marque {% endblock %}

{% set menu_marque        = true %}
{% set menu_marque_create = true %}

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
                        <h3 class=\"box-title\">Editer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.mrqLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_marque\"/>
                        <a href=\"{{ path('marque_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtMarque/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtMarque\\edit.html.twig");
    }
}
