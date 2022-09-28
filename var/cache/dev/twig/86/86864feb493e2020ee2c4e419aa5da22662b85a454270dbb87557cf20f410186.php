<?php

/* @Admin/CtTypeDroitPtac/edit.html.twig */
class __TwigTemplate_ba311160c31565564f4848365c8e71e1e56f55f0158a18bf6d78cb75e3e1605a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeDroitPtac/edit.html.twig", 1);
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
        $__internal_7082c5cac52c992e5c54b31fff8b327e72494c1f2f118f72912a9a8c5fc4e3fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7082c5cac52c992e5c54b31fff8b327e72494c1f2f118f72912a9a8c5fc4e3fd->enter($__internal_7082c5cac52c992e5c54b31fff8b327e72494c1f2f118f72912a9a8c5fc4e3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeDroitPtac/edit.html.twig"));

        $__internal_5454f026ebcd82635e9d438631819ac215689ee237ec0b122168d3b42522502d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5454f026ebcd82635e9d438631819ac215689ee237ec0b122168d3b42522502d->enter($__internal_5454f026ebcd82635e9d438631819ac215689ee237ec0b122168d3b42522502d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeDroitPtac/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_type_droit_ptac"] = true;
        // line 8
        $context["menu_type_droit_ptac_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7082c5cac52c992e5c54b31fff8b327e72494c1f2f118f72912a9a8c5fc4e3fd->leave($__internal_7082c5cac52c992e5c54b31fff8b327e72494c1f2f118f72912a9a8c5fc4e3fd_prof);

        
        $__internal_5454f026ebcd82635e9d438631819ac215689ee237ec0b122168d3b42522502d->leave($__internal_5454f026ebcd82635e9d438631819ac215689ee237ec0b122168d3b42522502d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3015bb35dd7aa69f7220e5cfb85946fe37208e11899b0c1fc770b329d624d250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3015bb35dd7aa69f7220e5cfb85946fe37208e11899b0c1fc770b329d624d250->enter($__internal_3015bb35dd7aa69f7220e5cfb85946fe37208e11899b0c1fc770b329d624d250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5031c3180cc6c0e3eec95366b8a5cd31120c5cfc98ce997febd868ba5dbf595e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5031c3180cc6c0e3eec95366b8a5cd31120c5cfc98ce997febd868ba5dbf595e->enter($__internal_5031c3180cc6c0e3eec95366b8a5cd31120c5cfc98ce997febd868ba5dbf595e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type de droit PTAC ";
        
        $__internal_5031c3180cc6c0e3eec95366b8a5cd31120c5cfc98ce997febd868ba5dbf595e->leave($__internal_5031c3180cc6c0e3eec95366b8a5cd31120c5cfc98ce997febd868ba5dbf595e_prof);

        
        $__internal_3015bb35dd7aa69f7220e5cfb85946fe37208e11899b0c1fc770b329d624d250->leave($__internal_3015bb35dd7aa69f7220e5cfb85946fe37208e11899b0c1fc770b329d624d250_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c14057576d1d9abf3853b84cc538d43c78d45e76ec3033b95644a866a869c651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14057576d1d9abf3853b84cc538d43c78d45e76ec3033b95644a866a869c651->enter($__internal_c14057576d1d9abf3853b84cc538d43c78d45e76ec3033b95644a866a869c651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5a4aae17708d869f74f2b8a131b86fd356f3ef59a798a5e0bd3634504b5df2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a4aae17708d869f74f2b8a131b86fd356f3ef59a798a5e0bd3634504b5df2b->enter($__internal_c5a4aae17708d869f74f2b8a131b86fd356f3ef59a798a5e0bd3634504b5df2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une type de droit PTAC</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tpDpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_droit_ptac\"/>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_c5a4aae17708d869f74f2b8a131b86fd356f3ef59a798a5e0bd3634504b5df2b->leave($__internal_c5a4aae17708d869f74f2b8a131b86fd356f3ef59a798a5e0bd3634504b5df2b_prof);

        
        $__internal_c14057576d1d9abf3853b84cc538d43c78d45e76ec3033b95644a866a869c651->leave($__internal_c14057576d1d9abf3853b84cc538d43c78d45e76ec3033b95644a866a869c651_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeDroitPtac/edit.html.twig";
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

{% block title %}{{ parent() }} Modification Type de droit PTAC {% endblock %}

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
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une type de droit PTAC</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.tpDpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_droit_ptac\"/>
                        <a href=\"{{ path('type_droit_ptac_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeDroitPtac/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeDroitPtac\\edit.html.twig");
    }
}
