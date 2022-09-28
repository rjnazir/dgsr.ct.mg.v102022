<?php

/* AdminBundle:CtMotifTarif:edit.html.twig */
class __TwigTemplate_ac76041dfd5db0129f89585c2ca94097e4e083329b040cfdbfc91445ee383d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMotifTarif:edit.html.twig", 1);
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
        $__internal_1642e91d10ee5434f8a41e66d7f8b25cbe4ebc8a53343325b2ce32694cf2d097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1642e91d10ee5434f8a41e66d7f8b25cbe4ebc8a53343325b2ce32694cf2d097->enter($__internal_1642e91d10ee5434f8a41e66d7f8b25cbe4ebc8a53343325b2ce32694cf2d097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotifTarif:edit.html.twig"));

        $__internal_2394f57a4357565ad068584c84837f963f0091b38e649494e761069c8bd2ac98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2394f57a4357565ad068584c84837f963f0091b38e649494e761069c8bd2ac98->enter($__internal_2394f57a4357565ad068584c84837f963f0091b38e649494e761069c8bd2ac98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotifTarif:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_motif_tarif"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1642e91d10ee5434f8a41e66d7f8b25cbe4ebc8a53343325b2ce32694cf2d097->leave($__internal_1642e91d10ee5434f8a41e66d7f8b25cbe4ebc8a53343325b2ce32694cf2d097_prof);

        
        $__internal_2394f57a4357565ad068584c84837f963f0091b38e649494e761069c8bd2ac98->leave($__internal_2394f57a4357565ad068584c84837f963f0091b38e649494e761069c8bd2ac98_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab4525f6440b9e0d8e8c9b73ec8d9a499bd26712dd0d9a47cff409dc1bbce3bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab4525f6440b9e0d8e8c9b73ec8d9a499bd26712dd0d9a47cff409dc1bbce3bb->enter($__internal_ab4525f6440b9e0d8e8c9b73ec8d9a499bd26712dd0d9a47cff409dc1bbce3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4bccc2e45b3d08f68f7cd61ed799d2ef23d9fc54ee4f253f09d066c707fae5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bccc2e45b3d08f68f7cd61ed799d2ef23d9fc54ee4f253f09d066c707fae5b4->enter($__internal_4bccc2e45b3d08f68f7cd61ed799d2ef23d9fc54ee4f253f09d066c707fae5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification tarif de motif ";
        
        $__internal_4bccc2e45b3d08f68f7cd61ed799d2ef23d9fc54ee4f253f09d066c707fae5b4->leave($__internal_4bccc2e45b3d08f68f7cd61ed799d2ef23d9fc54ee4f253f09d066c707fae5b4_prof);

        
        $__internal_ab4525f6440b9e0d8e8c9b73ec8d9a499bd26712dd0d9a47cff409dc1bbce3bb->leave($__internal_ab4525f6440b9e0d8e8c9b73ec8d9a499bd26712dd0d9a47cff409dc1bbce3bb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4390f8c131401723cfa8824506674c5efbbbc6b15a4acc0268a5ac3fd3ad0d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4390f8c131401723cfa8824506674c5efbbbc6b15a4acc0268a5ac3fd3ad0d5e->enter($__internal_4390f8c131401723cfa8824506674c5efbbbc6b15a4acc0268a5ac3fd3ad0d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da8d4ce7066f8430592985e163869b248b70e140f892207768325b5618221a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da8d4ce7066f8430592985e163869b248b70e140f892207768325b5618221a0d->enter($__internal_da8d4ce7066f8430592985e163869b248b70e140f892207768325b5618221a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer un tarif motif</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctMotif", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mtfTrfPrix", array()), 'row');
        echo "
                        ";
        // line 33
        echo "                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_motif\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_tarif_index");
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
        
        $__internal_da8d4ce7066f8430592985e163869b248b70e140f892207768325b5618221a0d->leave($__internal_da8d4ce7066f8430592985e163869b248b70e140f892207768325b5618221a0d_prof);

        
        $__internal_4390f8c131401723cfa8824506674c5efbbbc6b15a4acc0268a5ac3fd3ad0d5e->leave($__internal_4390f8c131401723cfa8824506674c5efbbbc6b15a4acc0268a5ac3fd3ad0d5e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMotifTarif:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  131 => 33,  127 => 31,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification tarif de motif {% endblock %}

{% set menu_motif_tarif = true %}

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
                        <h3 class=\"box-title\">Editer un tarif motif</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctMotif) }}
                        {{ form_row(edit_form.mtfTrfPrix) }}
                        {#{{ form_row(edit_form.mtfTrfDate) }}#}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_motif\"/>
                        <a href=\"{{ path('motif_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtMotifTarif:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMotifTarif/edit.html.twig");
    }
}
