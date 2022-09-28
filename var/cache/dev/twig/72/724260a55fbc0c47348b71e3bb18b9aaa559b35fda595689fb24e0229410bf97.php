<?php

/* @Admin/CtTypeConstatationAvDedouanement/edit.html.twig */
class __TwigTemplate_85c923305cec63bcf895964d745ba4df6f9427d0cf4031f595e4bc5375ecdaa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeConstatationAvDedouanement/edit.html.twig", 1);
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
        $__internal_59079394f1ed0d933ad50721968a1abba41fd9d467c1b32cabf17706726252dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59079394f1ed0d933ad50721968a1abba41fd9d467c1b32cabf17706726252dd->enter($__internal_59079394f1ed0d933ad50721968a1abba41fd9d467c1b32cabf17706726252dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeConstatationAvDedouanement/edit.html.twig"));

        $__internal_db96234cb39f7f1f2b37548e2b120fe4e8d1f6b7da2aae6ada8bcf04a72482e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db96234cb39f7f1f2b37548e2b120fe4e8d1f6b7da2aae6ada8bcf04a72482e1->enter($__internal_db96234cb39f7f1f2b37548e2b120fe4e8d1f6b7da2aae6ada8bcf04a72482e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeConstatationAvDedouanement/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_const_av_ded_type"] = true;
        // line 8
        $context["menu_const_av_ded_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59079394f1ed0d933ad50721968a1abba41fd9d467c1b32cabf17706726252dd->leave($__internal_59079394f1ed0d933ad50721968a1abba41fd9d467c1b32cabf17706726252dd_prof);

        
        $__internal_db96234cb39f7f1f2b37548e2b120fe4e8d1f6b7da2aae6ada8bcf04a72482e1->leave($__internal_db96234cb39f7f1f2b37548e2b120fe4e8d1f6b7da2aae6ada8bcf04a72482e1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f99132f8622f2d59c834114e849a05d0fbbac4002c6a45cda928b91ef6597650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f99132f8622f2d59c834114e849a05d0fbbac4002c6a45cda928b91ef6597650->enter($__internal_f99132f8622f2d59c834114e849a05d0fbbac4002c6a45cda928b91ef6597650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_24de4b48ae5291fc649efb74544e265ac7ec43c16f481cbb1807aff70fe39925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24de4b48ae5291fc649efb74544e265ac7ec43c16f481cbb1807aff70fe39925->enter($__internal_24de4b48ae5291fc649efb74544e265ac7ec43c16f481cbb1807aff70fe39925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type constatation avant dédouanement ";
        
        $__internal_24de4b48ae5291fc649efb74544e265ac7ec43c16f481cbb1807aff70fe39925->leave($__internal_24de4b48ae5291fc649efb74544e265ac7ec43c16f481cbb1807aff70fe39925_prof);

        
        $__internal_f99132f8622f2d59c834114e849a05d0fbbac4002c6a45cda928b91ef6597650->leave($__internal_f99132f8622f2d59c834114e849a05d0fbbac4002c6a45cda928b91ef6597650_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4e9d854a7f118fa55c660edbc2b45a699734cf15138fc41cc7e85bbff46da5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e9d854a7f118fa55c660edbc2b45a699734cf15138fc41cc7e85bbff46da5a->enter($__internal_a4e9d854a7f118fa55c660edbc2b45a699734cf15138fc41cc7e85bbff46da5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9428653a6efb0fbe1f8cd12d50e82e4d6a5ff94b1ebcb6011a282a2a1f53869d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9428653a6efb0fbe1f8cd12d50e82e4d6a5ff94b1ebcb6011a282a2a1f53869d->enter($__internal_9428653a6efb0fbe1f8cd12d50e82e4d6a5ff94b1ebcb6011a282a2a1f53869d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">Editer un type constatation avant dédouanement</h3>
                </div>

                <div class=\"box-body\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadTpLibelle", array()), 'row');
        echo "
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_const_av_ded\"/>
                    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_index");
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
        
        $__internal_9428653a6efb0fbe1f8cd12d50e82e4d6a5ff94b1ebcb6011a282a2a1f53869d->leave($__internal_9428653a6efb0fbe1f8cd12d50e82e4d6a5ff94b1ebcb6011a282a2a1f53869d_prof);

        
        $__internal_a4e9d854a7f118fa55c660edbc2b45a699734cf15138fc41cc7e85bbff46da5a->leave($__internal_a4e9d854a7f118fa55c660edbc2b45a699734cf15138fc41cc7e85bbff46da5a_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeConstatationAvDedouanement/edit.html.twig";
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

{% block title %}{{ parent() }} Modification Type constatation avant dédouanement {% endblock %}

{% set menu_const_av_ded_type        = true %}
{% set menu_const_av_ded_type_create = true %}

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
                    <h3 class=\"box-title\">Editer un type constatation avant dédouanement</h3>
                </div>

                <div class=\"box-body\">
                    {{ form_row(edit_form.cadTpLibelle) }}
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_const_av_ded\"/>
                    <a href=\"{{ path('type_const_av_ded_index') }}\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeConstatationAvDedouanement/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeConstatationAvDedouanement\\edit.html.twig");
    }
}
