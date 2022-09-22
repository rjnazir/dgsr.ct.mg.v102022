<?php

/* @Admin/CtRole/add.html.twig */
class __TwigTemplate_493a658aaffc905bbaa90ee6a3d626d120cedc47aaadc4f8a7a2016311cfbbed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtRole/add.html.twig", 1);
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
        $__internal_52b822322bb4c2e9355535bef780715cca864538dbf2affac78910ac6891bbf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b822322bb4c2e9355535bef780715cca864538dbf2affac78910ac6891bbf6->enter($__internal_52b822322bb4c2e9355535bef780715cca864538dbf2affac78910ac6891bbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtRole/add.html.twig"));

        $__internal_ece51ea0be7dea45427d6a56d7aba359c195354f92286fa866baae4976a6e871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece51ea0be7dea45427d6a56d7aba359c195354f92286fa866baae4976a6e871->enter($__internal_ece51ea0be7dea45427d6a56d7aba359c195354f92286fa866baae4976a6e871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtRole/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_role"] = true;
        // line 8
        $context["menu_role_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52b822322bb4c2e9355535bef780715cca864538dbf2affac78910ac6891bbf6->leave($__internal_52b822322bb4c2e9355535bef780715cca864538dbf2affac78910ac6891bbf6_prof);

        
        $__internal_ece51ea0be7dea45427d6a56d7aba359c195354f92286fa866baae4976a6e871->leave($__internal_ece51ea0be7dea45427d6a56d7aba359c195354f92286fa866baae4976a6e871_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_88b510547255c10dacdabc0821b268ff602b79e833307f4f641e08ca958ae3b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b510547255c10dacdabc0821b268ff602b79e833307f4f641e08ca958ae3b0->enter($__internal_88b510547255c10dacdabc0821b268ff602b79e833307f4f641e08ca958ae3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a6ef315e9256edf9783fa3555a6da8dc683baf4cf673a4826582ba974a0a7543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ef315e9256edf9783fa3555a6da8dc683baf4cf673a4826582ba974a0a7543->enter($__internal_a6ef315e9256edf9783fa3555a6da8dc683baf4cf673a4826582ba974a0a7543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Rôle ";
        
        $__internal_a6ef315e9256edf9783fa3555a6da8dc683baf4cf673a4826582ba974a0a7543->leave($__internal_a6ef315e9256edf9783fa3555a6da8dc683baf4cf673a4826582ba974a0a7543_prof);

        
        $__internal_88b510547255c10dacdabc0821b268ff602b79e833307f4f641e08ca958ae3b0->leave($__internal_88b510547255c10dacdabc0821b268ff602b79e833307f4f641e08ca958ae3b0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d67ad6a7818d27fd6baafce552fb954062a0a4a77372549bf7f2d0939f6d8976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d67ad6a7818d27fd6baafce552fb954062a0a4a77372549bf7f2d0939f6d8976->enter($__internal_d67ad6a7818d27fd6baafce552fb954062a0a4a77372549bf7f2d0939f6d8976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7b727ef9d2e2e56634373aab18b469ffd013b7f240c1258f0d01d3a0654e98b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b727ef9d2e2e56634373aab18b469ffd013b7f240c1258f0d01d3a0654e98b->enter($__internal_a7b727ef9d2e2e56634373aab18b469ffd013b7f240c1258f0d01d3a0654e98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a7b727ef9d2e2e56634373aab18b469ffd013b7f240c1258f0d01d3a0654e98b->leave($__internal_a7b727ef9d2e2e56634373aab18b469ffd013b7f240c1258f0d01d3a0654e98b_prof);

        
        $__internal_d67ad6a7818d27fd6baafce552fb954062a0a4a77372549bf7f2d0939f6d8976->leave($__internal_d67ad6a7818d27fd6baafce552fb954062a0a4a77372549bf7f2d0939f6d8976_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtRole/add.html.twig";
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
{% endblock %}", "@Admin/CtRole/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtRole\\add.html.twig");
    }
}
