<?php

/* @Admin/CtMotif/edit.html.twig */
class __TwigTemplate_79f81474c8dc941588b4b3cd82285726e9403215e8c14dfe2085154e17abecf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtMotif/edit.html.twig", 1);
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
        $__internal_8352afeadee468a0d141869d7a7046ad06c82392b659232bd4b7e145a4ba31f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8352afeadee468a0d141869d7a7046ad06c82392b659232bd4b7e145a4ba31f6->enter($__internal_8352afeadee468a0d141869d7a7046ad06c82392b659232bd4b7e145a4ba31f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotif/edit.html.twig"));

        $__internal_da96708cec68d9a5596fc4aadc4c180b7eae57ae513c2987e9e2de3feba56943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da96708cec68d9a5596fc4aadc4c180b7eae57ae513c2987e9e2de3feba56943->enter($__internal_da96708cec68d9a5596fc4aadc4c180b7eae57ae513c2987e9e2de3feba56943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotif/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_motif"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8352afeadee468a0d141869d7a7046ad06c82392b659232bd4b7e145a4ba31f6->leave($__internal_8352afeadee468a0d141869d7a7046ad06c82392b659232bd4b7e145a4ba31f6_prof);

        
        $__internal_da96708cec68d9a5596fc4aadc4c180b7eae57ae513c2987e9e2de3feba56943->leave($__internal_da96708cec68d9a5596fc4aadc4c180b7eae57ae513c2987e9e2de3feba56943_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_68df102e0e6d88410d8a443d923b6bafc378e85d1a457857763abd668052e42e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68df102e0e6d88410d8a443d923b6bafc378e85d1a457857763abd668052e42e->enter($__internal_68df102e0e6d88410d8a443d923b6bafc378e85d1a457857763abd668052e42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_878f1f5c4b5a93d510ef454dac31580513d9b7ddb654cd4598f51032bb25a64e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878f1f5c4b5a93d510ef454dac31580513d9b7ddb654cd4598f51032bb25a64e->enter($__internal_878f1f5c4b5a93d510ef454dac31580513d9b7ddb654cd4598f51032bb25a64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Motif ";
        
        $__internal_878f1f5c4b5a93d510ef454dac31580513d9b7ddb654cd4598f51032bb25a64e->leave($__internal_878f1f5c4b5a93d510ef454dac31580513d9b7ddb654cd4598f51032bb25a64e_prof);

        
        $__internal_68df102e0e6d88410d8a443d923b6bafc378e85d1a457857763abd668052e42e->leave($__internal_68df102e0e6d88410d8a443d923b6bafc378e85d1a457857763abd668052e42e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3355e464f08868e54094266ba00fafdd6cc545a459fa752f5ea36591cf4631df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3355e464f08868e54094266ba00fafdd6cc545a459fa752f5ea36591cf4631df->enter($__internal_3355e464f08868e54094266ba00fafdd6cc545a459fa752f5ea36591cf4631df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6eda2726e6768ee4c6ac2b75544bb534179d30613ee10090ec6c1df3d0cd5922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eda2726e6768ee4c6ac2b75544bb534179d30613ee10090ec6c1df3d0cd5922->enter($__internal_6eda2726e6768ee4c6ac2b75544bb534179d30613ee10090ec6c1df3d0cd5922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une motif</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mtfLibelle", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mtfIsCalculable", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_motif\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_index");
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
        
        $__internal_6eda2726e6768ee4c6ac2b75544bb534179d30613ee10090ec6c1df3d0cd5922->leave($__internal_6eda2726e6768ee4c6ac2b75544bb534179d30613ee10090ec6c1df3d0cd5922_prof);

        
        $__internal_3355e464f08868e54094266ba00fafdd6cc545a459fa752f5ea36591cf4631df->leave($__internal_3355e464f08868e54094266ba00fafdd6cc545a459fa752f5ea36591cf4631df_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtMotif/edit.html.twig";
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

{% block title %}{{ parent() }} Modification Motif {% endblock %}

{% set menu_motif = true %}

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
                        <h3 class=\"box-title\">Editer une motif</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.mtfLibelle) }}
                        {{ form_row(edit_form.mtfIsCalculable) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_motif\"/>
                        <a href=\"{{ path('motif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtMotif/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtMotif\\edit.html.twig");
    }
}
