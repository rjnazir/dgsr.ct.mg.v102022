<?php

/* AdminBundle:CtMarque:add.html.twig */
class __TwigTemplate_04dade6c8ca75197290a3e246a1aff31d79e63f32efb49436f628e27b735b4c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMarque:add.html.twig", 1);
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
        $__internal_413398a7756baa9221b7f423d38c33ae3c0f75319a87436f952e06309e23726f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_413398a7756baa9221b7f423d38c33ae3c0f75319a87436f952e06309e23726f->enter($__internal_413398a7756baa9221b7f423d38c33ae3c0f75319a87436f952e06309e23726f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMarque:add.html.twig"));

        $__internal_557ea9d4bdc948ba4236dff5f6c6b8943fe5bbe782f53fa385977d83ef691011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557ea9d4bdc948ba4236dff5f6c6b8943fe5bbe782f53fa385977d83ef691011->enter($__internal_557ea9d4bdc948ba4236dff5f6c6b8943fe5bbe782f53fa385977d83ef691011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMarque:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_marque"] = true;
        // line 8
        $context["menu_marque_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_413398a7756baa9221b7f423d38c33ae3c0f75319a87436f952e06309e23726f->leave($__internal_413398a7756baa9221b7f423d38c33ae3c0f75319a87436f952e06309e23726f_prof);

        
        $__internal_557ea9d4bdc948ba4236dff5f6c6b8943fe5bbe782f53fa385977d83ef691011->leave($__internal_557ea9d4bdc948ba4236dff5f6c6b8943fe5bbe782f53fa385977d83ef691011_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b59e2eb2c800b35d05fd9248064f4b6fbb0cb34bc4f687fb5303b831d937cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b59e2eb2c800b35d05fd9248064f4b6fbb0cb34bc4f687fb5303b831d937cc3->enter($__internal_2b59e2eb2c800b35d05fd9248064f4b6fbb0cb34bc4f687fb5303b831d937cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_16f138678b19e7c42864424d0036b1754848ac1db3d9a8941cebb8b55bf4420d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f138678b19e7c42864424d0036b1754848ac1db3d9a8941cebb8b55bf4420d->enter($__internal_16f138678b19e7c42864424d0036b1754848ac1db3d9a8941cebb8b55bf4420d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Catégorie ";
        
        $__internal_16f138678b19e7c42864424d0036b1754848ac1db3d9a8941cebb8b55bf4420d->leave($__internal_16f138678b19e7c42864424d0036b1754848ac1db3d9a8941cebb8b55bf4420d_prof);

        
        $__internal_2b59e2eb2c800b35d05fd9248064f4b6fbb0cb34bc4f687fb5303b831d937cc3->leave($__internal_2b59e2eb2c800b35d05fd9248064f4b6fbb0cb34bc4f687fb5303b831d937cc3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a241c47d03bac97f43399474c39496070ae00e7d2c3dae05477adf5ec5a0acc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a241c47d03bac97f43399474c39496070ae00e7d2c3dae05477adf5ec5a0acc->enter($__internal_7a241c47d03bac97f43399474c39496070ae00e7d2c3dae05477adf5ec5a0acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b49b6a1528c26fad5848511fd5fcad288440204dd72db326fc9d11e59e7f796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b49b6a1528c26fad5848511fd5fcad288440204dd72db326fc9d11e59e7f796->enter($__internal_2b49b6a1528c26fad5848511fd5fcad288440204dd72db326fc9d11e59e7f796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mrqLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_marque\"/>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_2b49b6a1528c26fad5848511fd5fcad288440204dd72db326fc9d11e59e7f796->leave($__internal_2b49b6a1528c26fad5848511fd5fcad288440204dd72db326fc9d11e59e7f796_prof);

        
        $__internal_7a241c47d03bac97f43399474c39496070ae00e7d2c3dae05477adf5ec5a0acc->leave($__internal_7a241c47d03bac97f43399474c39496070ae00e7d2c3dae05477adf5ec5a0acc_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMarque:add.html.twig";
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

{% block title %}{{ parent() }} Ajout Catégorie {% endblock %}

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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.mrqLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_marque\"/>
                        <a href=\"{{ path('marque_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtMarque:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMarque/add.html.twig");
    }
}
