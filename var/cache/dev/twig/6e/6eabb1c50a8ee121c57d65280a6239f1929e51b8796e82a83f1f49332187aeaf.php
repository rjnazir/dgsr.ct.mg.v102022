<?php

/* AdminBundle:CtProcesVerbal:edit.html.twig */
class __TwigTemplate_429232781358f9634260548e29a1a0676a5f4ab58b3e7502043f6c8285ca8c44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtProcesVerbal:edit.html.twig", 1);
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
        $__internal_d246e9aa69ddd00d2a1f7f1ab1d3d9401216a102e44fd2844662e83f0aee7ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d246e9aa69ddd00d2a1f7f1ab1d3d9401216a102e44fd2844662e83f0aee7ae3->enter($__internal_d246e9aa69ddd00d2a1f7f1ab1d3d9401216a102e44fd2844662e83f0aee7ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProcesVerbal:edit.html.twig"));

        $__internal_09aaa61654524c9caef1ded3f2b68b0a88c2d49db32a32305e50f5cc64ed9e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09aaa61654524c9caef1ded3f2b68b0a88c2d49db32a32305e50f5cc64ed9e23->enter($__internal_09aaa61654524c9caef1ded3f2b68b0a88c2d49db32a32305e50f5cc64ed9e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProcesVerbal:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_proces_verbal"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d246e9aa69ddd00d2a1f7f1ab1d3d9401216a102e44fd2844662e83f0aee7ae3->leave($__internal_d246e9aa69ddd00d2a1f7f1ab1d3d9401216a102e44fd2844662e83f0aee7ae3_prof);

        
        $__internal_09aaa61654524c9caef1ded3f2b68b0a88c2d49db32a32305e50f5cc64ed9e23->leave($__internal_09aaa61654524c9caef1ded3f2b68b0a88c2d49db32a32305e50f5cc64ed9e23_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cb3e6a7930b2c388161b8d577b05bfd5422d3ff50c66274ce555bac18f6fed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb3e6a7930b2c388161b8d577b05bfd5422d3ff50c66274ce555bac18f6fed5->enter($__internal_7cb3e6a7930b2c388161b8d577b05bfd5422d3ff50c66274ce555bac18f6fed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_492210d630c9a706fb521d8ed16bbdb5e18a8e068f1dadd727521e9157fa1c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492210d630c9a706fb521d8ed16bbdb5e18a8e068f1dadd727521e9157fa1c4c->enter($__internal_492210d630c9a706fb521d8ed16bbdb5e18a8e068f1dadd727521e9157fa1c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Proces Verbal ";
        
        $__internal_492210d630c9a706fb521d8ed16bbdb5e18a8e068f1dadd727521e9157fa1c4c->leave($__internal_492210d630c9a706fb521d8ed16bbdb5e18a8e068f1dadd727521e9157fa1c4c_prof);

        
        $__internal_7cb3e6a7930b2c388161b8d577b05bfd5422d3ff50c66274ce555bac18f6fed5->leave($__internal_7cb3e6a7930b2c388161b8d577b05bfd5422d3ff50c66274ce555bac18f6fed5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea3717a363aa4c1d7d424ce171aa0b3c7814cf9d31629c072f7e68c197867188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea3717a363aa4c1d7d424ce171aa0b3c7814cf9d31629c072f7e68c197867188->enter($__internal_ea3717a363aa4c1d7d424ce171aa0b3c7814cf9d31629c072f7e68c197867188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad58f906a8587d47140b98e444c80ee04b8bf70a27d4cd95c6e12eb87107e2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad58f906a8587d47140b98e444c80ee04b8bf70a27d4cd95c6e12eb87107e2b8->enter($__internal_ad58f906a8587d47140b98e444c80ee04b8bf70a27d4cd95c6e12eb87107e2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un Proces Verbal</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pvType", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pvTarif", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_proces_verbal\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_index");
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
        
        $__internal_ad58f906a8587d47140b98e444c80ee04b8bf70a27d4cd95c6e12eb87107e2b8->leave($__internal_ad58f906a8587d47140b98e444c80ee04b8bf70a27d4cd95c6e12eb87107e2b8_prof);

        
        $__internal_ea3717a363aa4c1d7d424ce171aa0b3c7814cf9d31629c072f7e68c197867188->leave($__internal_ea3717a363aa4c1d7d424ce171aa0b3c7814cf9d31629c072f7e68c197867188_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtProcesVerbal:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  135 => 36,  127 => 31,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Proces Verbal {% endblock %}

{% set menu_proces_verbal = true %}

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
                        <h3 class=\"box-title\">Editer un Proces Verbal</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.pvType) }}
                        {{ form_row(edit_form.pvTarif) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_proces_verbal\"/>
                        <a href=\"{{ path('proces_verbal_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtProcesVerbal:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtProcesVerbal/edit.html.twig");
    }
}
